<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Comment;
use App\Models\Reply;
/**use Egulias\EmailValidator\Parser\Comment; **/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;




use Stripe;
use Stripe\Charge;




class HomeController extends Controller
{

    /**
     * redirect
     */
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        $product = product::all();
        if ($usertype == '1') {
            $totalProduct = product::all()->count();
            $totalOrder = order::all()->count();
            $totalUser = user::all()->count();
            $order = order::all();
            $totalRevenue = 0;
            foreach($order as $order){
                $totalRevenue = $totalRevenue + $order->price;
            }
            $total_delivered = order::where('delivery_status','=','delivered')->get()->count();
            $total_proccessing = order::where('delivery_status','=','proccessing')->get()->count();
            return view('admin.home',compact('totalProduct','totalOrder','totalUser','totalRevenue','total_delivered','total_proccessing'));
        } else {
            $comment = comment::orderby('id','desc')->get();
            $reply = reply::all();
            return view('home.userpage',compact('product','comment','reply'));
        }
    }
    /**
     * index.
     */
    public function index()
    {
        $product = product::paginate(4);
        $comment = comment::orderby('id','desc')->get();
        $reply = reply::all();
        
        return view('home.userpage', compact('product','comment','reply'));
    }


    public function remove_cart($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        return redirect()->back();
        

    }
    /**
     * product_details.
     */
    public function product_details($id)
    {
        $product = product::find($id);
        return view('home.product_details', compact('product'));
    }


    /**
     * add_cart.
     */
    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id =$user->id ;
            $product = product::find($id);
            $product_exist_id =cart::where('product_id', '=',$id)->where('user_id', '=',$user_id)->get('id')->first();
                if($product_exist_id!=null){
            $cart=cart::find($product_exist_id)->first();
        $quantity =$cart->quantity; 
        $cart->quantity=$quantity + $request->quantity;
        if ($product->discount_price != null) {
            $cart->price = $product->discount_price * $cart->quantity;
        } else {
            $cart->price = $product->price * $cart->quantity;
        }
        $cart->save();
        return redirect()->back()->with('message','product added to cart successfuly');
                }
                else{
                    $cart = new cart;
                    $cart->name = $user->name;
                    $cart->email = $user->email;
                    $cart->phone = $user->phone;
                    $cart->address = $user->address;
                    $cart->user_id = $user->id;
                    $cart->product_title = $product->title;
                    if ($product->discount_price != null) {
                        $cart->price = $product->discount_price * $request->quantity;
                    } else {
                        $cart->price = $product->price * $request->quantity;
                    }
                    $cart->price = $product->price  * $request->quantity;
                    $cart->image = $product->image;
                    $cart->product_id = $product->id;
                    $cart->quantity = $request->quantity;
                    $cart->save();
                    return redirect()->back();
                }
            $cart = new cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->product_title = $product->title;
            if ($product->discount_price != null) {
                $cart->price = $product->discount_price * $request->quantity;
            } else {
                $cart->price = $product->price * $request->quantity;
            }
            $cart->price = $product->price  * $request->quantity;
            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back()->with('message','product added to cart successfuly');
        } 
        else 
        {
            return redirect('login');
        }
    }

    /**
     * show_cart.
     */
    public function show_cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = cart::where('user_id', '=', $id)->get();
            return view('home.show_cart', compact('cart'));
        } else {
            return redirect('login');
        }
    }
    /**
     * delete_cart.
     */
    public function delete_cart($id)
    {

        
        return redirect()->back();
    }

    /**
     * cash_order.
     */
    public function cash_order()
    {
        
    
        $user = Auth::user();
        $userid = $user->id;
        $data = cart::where('user_id', '=', $userid)->get();

        foreach ($data as $data)
         {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;
            $order->payment_status='cash on delivery';
            $order->delivery_status='proccessing';
            $order->save();
            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
        } 
        return redirect()->back();
    }
    public function stripe($totalprice){
return view('home.stripe',compact('totalprice'));
    }
  /**
     * stripePost.
     */

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from tutsmake.com." 
        ]);
  
        Session::flash('success','Payment successful!');
          
        return back();
    }



 /**
     * show order.
     */

public function show_order(){
    if(Auth::id()){
        $user=Auth::user();
    $userId= $user->id;
    $order=order::where('user_id','=',$userId)->get();
        return view('home.show_order',compact('order'));
    }
    else{
        return redirect('login');
    }
    
}
public function cancel_order($id)
{
    $order = order::find($id);
    $order->delivery_status="Your order is canceled";
    $order->save();
    return redirect()->back();
}
/** add comment **/
public function add_comment(Request $request)
{
if(Auth::id())
{
$comment = new comment;
$comment->name=Auth::user()->name;
$comment->user_id=Auth::user()->id;
$comment->comment=$request->comment;
$comment->save();
return redirect()->back();

}
else
{
    return redirect('login');
}
}

/** add reply **/
public function add_reply(Request $request)
{
if(Auth::id())
{
$reply = new reply;
$reply->name=Auth::user()->name;
$reply->user_id=Auth::user()->id;
$reply->comment_id=$request->commentId;
$reply->reply=$request->reply;
$reply->save();
return redirect()->back();

}
else
{
    return redirect('login');
}
}

public function product_search (Request $request)
{
    $search_text = $request->search;
    $comment =comment::all();
    $reply =reply::all();
    $product = product::where('title', 'LIKE', "%$search_text%")->get();
    return view('home.userpage',compact('product','comment','reply'));
}

public function products()
{   
    $product =product::all();
    $comment =comment::all();
    $reply =reply::all();
    return view('home.products',compact('product','comment','reply'));
}
public function product_sch (Request $request)
{
    $search_text = $request->search;
    $comment =comment::all();
    $reply =reply::all();
    $product = product::where('title', 'LIKE', "%$search_text%")->get();
    return view('home.products',compact('product','comment','reply'));
}
}
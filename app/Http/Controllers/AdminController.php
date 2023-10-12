<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use PDF;

use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;


class AdminController extends Controller
{
    /**
     * view_category.
     */
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category',compact("data"));
    }

    /**
     * add_category
     */
    public function add_category(Request $request)
    {
        $data = new Category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category added successfully');
    }

    /**
     * view_product.
     */ 
    public function view_product()
    {
       $category = Category::all();
        return view('admin.product',compact('category'));
    }
   
     /**
     * add product.
     */

    public function add_product(Request $request)
    {
       
               $product = new product;
               $product->title = $request->title;
               $product->description = $request->description;
               $product->price = $request->price;
               $product->quantity = $request->quantity;
               $product->discount_price = $request->discount_price;
               $product->category=$request->category;

               $image = $request->image;
               $imagename = time() . '.' . $image->getClientOriginalExtension();
               $request->image->move('product', $imagename);
               $product->image=$imagename;
               $product->save();
               return redirect()->back();
    }
      /**
     * show product.
     */

     public function show_product()
     {
        $product = product::all();
        return view('admin.show_product',compact('product'));
     }
 /**
     * edit product.
     */
public function edit_product($id)
{
$category = Category::all();
$product = product::find($id);
return view('admin.edit_product',compact('product','category'));
}
     
 /**
     * update product.
     */
    public function update_product(Request $request ,$id)
    {
        $product = product::find($id);
               $product->title = $request->title;
               $product->description = $request->description;
               $product->price = $request->price;
               $product->quantity = $request->quantity;
               $product->discount_price = $request->discount_price;
               $product->category=$request->category;

               $image = $request->image;
               $imagename = time() . '.' . $image->getClientOriginalExtension();
               $request->image->move('product', $imagename);
               $product->image=$imagename;
               $product->save();
               return redirect()->back();
    }
    
    
    /**
     * Delete product.
     */
    public function delete_product($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'product deteted successfully');
    }

    /**
     * Remove the resource from storage.
     */
    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category deteted successfully');
    }

      /**
     * Order.
     */
    public function order()
    {
        $order = order::all();
        return view('admin.order',compact('order'));
    }
  /**
     * delivered.
     */
    public function delivered($id)
    {
        $order = order::find($id);
        $order->delivery_status = "DELIVERED";
        $order->payment_status = "PAID";

        $order->save();
        return redirect()->back();
        
    }

 /**
     * pdf
     */
    public function pdf($id)
    {
        $order = order::find($id);
        $pdf=PDF::loadView('admin.pdf',compact('order'));
        
        return $pdf->download('order_details.pdf');
    }
    

     /**
     * Send Email
     */
    public function Send_email($id)
    {
        $order =order::find($id);
        return view('admin.email_info',compact('order'));
    }

      /**
     * Send User Email
     */
    public function Send_user_email( Request $request,$id)
    {
        $order =order::find($id);
        $details = [
'greeting' => $request->greeting,
'first_ligne' => $request->first_ligne,
'body' => $request->bidy,
'button' => $request->button,
'url' => $request->url,
'last_ligne' => $request->last_ligne,
        ];
        Notification::send($order,new sendEmailNotification($details));
        return redirect()->back();
    }

    public function search(Request $request)
    {
$searchText = $request->search;
$order =order::where('name','LIKE',"$searchText%")->get();
return view('admin.order',compact('order'));

    }

}

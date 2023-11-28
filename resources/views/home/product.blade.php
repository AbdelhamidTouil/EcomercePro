
<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  {{__('msg.our')}} <span>{{__('msg.products')}}</span>
               </h2>
               <div>
                  <form action="{{url('product_search')}}" method="GET">
                     @csrf

                     <div class="d-input">
                        <span class="resize">
                          <input type="text" name="search" placeholder="{{__('msg.search for something')}}"/>
                        </span>
                        <input type="submit" value="{{__('msg.search')}}">
                        
                        
                      </div>
                      
                  
                  </form>
               </div>
            </div>
            <!-- start allert message  -->
            @if(session()->has('message'))
            <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
        @endif
        <!-- end  allert message  -->
            <div class="row">
               @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                          Product details
                           </a>
                           <form action="{{url('add_cart', $products->id)}}" method="post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                              <input type="number" value="1" min="1" name="quantity">
                           </div>
                           <div class="col-md-4"><input type="submit" value="Add to cart" id=""></div>
                              
                           </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="/product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           
                              {{$products->title}}
                           
                        </h5>
                        @if($products->discount_price!=null)
                        <h6>
                           ${{$products->discount_price}}
                        </h6>
                        @endif
                        <h6>
                           ${{$products->price}}
                           
                        </h6>
                     </div>
                  </div>
               </div>
            @endforeach
          
            </div>
         </div>
        

      </section>
      <div class="d-flex justify-content-center">
            
         {{ $product->withQueryString()->links('pagination::bootstrap-5') }}

         
      </div>
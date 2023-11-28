   <body>
      <div class="hero_area">
         <!-- header section strats -->
       @include('home.header')

       
         <!-- end header section -->
          <center><div class="container" style="margin-top: 50px ; margin-bottom:50px" >
         <div class="card" style="width: 18rem;">
            <img src="/product/{{$product->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$product->title}}</h5>
              <p class="card-text">{{$product->description}}</p>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                
            </ul>
                <a href="#" class="card-link" style="color: red"> price &nbsp{{$product->price}}</a>
                <a href="#" class="card-link" style="color: red ;font-size: 12px;">Discout price &nbsp{{$product->discount_price}}</a>
              </div>
            <ul class="list-group list-group-flush">
    
                <form action="{{url('add_cart', $product->id)}}" method="post">
                    @csrf
                    <div class="row">
                       <div class="col-md-4">
                    <input type="number" value="1" min="1" name="quantity">
                 </div>
                 <div class="col-md-4">
                  <input type="submit" value="Add to cart" id="">
               </div>
               
                    
                 </div>
                 </form>
            </ul>
           
          </div>
        </div>
    </center>
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      
  
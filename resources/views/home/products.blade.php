<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Touilshop</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      
      <script src="https://cdn.datatables.net/plug-ins/1.10.20/sorting/enum.js"></script>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
       @include('home.header')
       
         <!-- end header section -->
       
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
              
               <div>
                  <form action="{{url('product_sch')}}" method="GET">
                     @csrf
                     <input type="text" name="search" placeholder="serach for something">
                     <input type="submit" value="search">
                  </form>
               </div>
            </div>
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
      <!-- end product section -->
       <!-- START COMMENT section -->

       @include('home.comment_reply')


        <!-- end COMMENT section  -->

      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>


      <script type="text/javascript">
         function reply(caller){
            document.getElementById('commentId').value=$(caller).attr('data-Commentid');
$('.replyDiv').insertAfter($(caller));
$('.replyDiv').show();
         }

         function reply_close(caller){

$('.replyDiv').hide();
         }

      </script>
         <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                var scrollpos = localStorage.getItem('scrollpos');
                if (scrollpos) window.scrollTo(0, scrollpos);
            });
    
            window.onbeforeunload = function(e) {
                localStorage.setItem('scrollpos', window.scrollY);
            };
        </script>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
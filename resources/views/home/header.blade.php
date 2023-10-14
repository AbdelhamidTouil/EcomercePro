@include('home.head_links')
<style>
   #logincss{
      color: rgb(247, 68, 78);
     
   }
   .log{
      font-family: 'Courier New', Courier, monospace;
   }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="#"><img width="250" src="{{asset('images/logo.png')}}"/></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" 
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                      
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('products')}}">Products</a>
                        </li>
                     
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_order')}}">Order</a>
                        </li>
                        <!-- start serch bar-->
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                        <!-- end search bar-->
                        @if (Route::has('login'))
                        @auth
                        <!-- start login btn-->
                        <li class="nav-item">
                        <x-app-layout>

                        </x-app-layout>
                        </li>
                        @else
                        <li class="nav-item" >
                          
                           &nbsp &nbsp &nbsp &nbsp<a class="fas fa-user-plus" href="{{route('login')}}" id="logincss"> <span class="log">Login</span> </a>
                        </li>
                        <!-- end login btn-->

                        <!-- start register btn-->
                        <li class="nav-item">
                           <a class="fas fa-sign-in-alt" href="{{route('register')}} " id="logincss"> <span class="log">Register</span> </a>
                        </li>
                        <!-- end register btn-->
                        @endauth
                        @endif
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
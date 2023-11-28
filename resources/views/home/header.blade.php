@include('home.head_links')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="#"><img width="200" src="{{asset('images/logo.png')}}"/></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" 
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">{{__('msg.home')}} <span class="sr-only">(current)</span></a>
                        </li>
                      
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('products')}}">{{__('msg.products')}}</a>
                        </li>
                     
                       

                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_order')}}">{{__('msg.orders')}}</a>
                        </li>

                     



                        <li class="nav-item">
                            <a class="nav-link" href="{{url('show_cart')}}"><i class="fa-solid fa-cart-shopping"></i>&nbsp</i>{{__('msg.cart')}}</a>
                        </li>


                        <li class="nav-item">
                           <a class="nav-link" href=""><i class="fa-solid fa-circle-info"></i>&nbsp</i>{{__('msg.help')}}</a>
                        </li>

                      
                       <div>
                        @if (Route::has('login'))
                        @auth
                        <!-- start login btn-->
                        <li class="nav-item">
                        <x-app-layout>

                        </x-app-layout>
                        </li>
                        @else
                        
                        <!-- end login btn-->

                        <!-- start register btn-->
                       
                        <!-- end register btn-->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle"  id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('msg.login')}} 
                              &nbsp
                               
                               <i  class="fa-solid fa-right-to-bracket"></i>
                           </a>
                           
                           <div class="dropdown-menu" aria-labelledby="dropdown01">
                             <a class="dropdown-item" href="{{route('login')}}">{{__('msg.login')}}</a>
                             <a class="dropdown-item" href="{{route('register')}}">{{__('msg.register')}}</a> 
                         </div>
                         
                     </li>


                        @endauth
                        @endif
                     </div>
                    
                       
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         
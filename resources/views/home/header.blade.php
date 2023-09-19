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
                  <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.html">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
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
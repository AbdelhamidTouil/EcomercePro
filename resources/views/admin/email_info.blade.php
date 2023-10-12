<!DOCTYPE html>
<html lang="en">
    <base href="/public">
  <head>
    <style>
        label{
            display: inline-block;
            width: 200px;
        }
       
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            <center><h1>Send Email To : {{$order->email}}</h1></center>   
            <form action="{{url('send_user_email',$order->id)}}" method="POST" style="margin-left: 300px">
                @csrf
            <div>
                <label for="Email Greeting">Email Greeting</label>
                <input style="color: black" type="text" name="greeting" id="">
            </div>

            <div>
                <label for="Email First Ligne">Email First Ligne</label>
                <input style="color: black" type="text" name="first_ligne" id="">
            </div>

            <div>
                <label for="Email Body">Email Body</label>
                <input  style="color: black" type="text" name="body" id="">
            </div>

            <div>
                <label for="Email Button Name">Email Button Name</label>
                <input style="color: black" type="text" name="button" id="">
            </div>

            <div>
                <label for="Email Url">Email Url</label>
                <input  style="color: black"type="text" name="url" id="">
            </div>

            <div>
                <label for="Email Last Ligne">Email Last Ligne</label>
                <input  style="color: black" type="text" name="last_ligne" id="">
            </div>

            <input type="submit" value="Send Email" class="btn btn-primary" style="margin-top: 20px;">
        </form> 
            </div>

                </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
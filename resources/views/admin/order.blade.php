<!DOCTYPE html>
<html lang="en">
  <head>
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
      <h2>All Orders</h2>
      <div>
        <form action="{{url('search')}}" method="get">
          @csrf
          <input type="text" name="search" placeholder="search for something" style="color: black">
          <input type="submit" value="search " class="btn btn-outline-primary">
        </form>
      </div>
      <table class="table">
    
        <tr>
            <th>Image</th>
            <th>Email</th>
            <th>Name</th>
           
            <th>payment status</th>
            <th>delivery status</th>
            <th>Delivered</th>
            <th>Pdf</th>
            <th>Send Email</th>
        </tr>

        @forelse ($order as $order)
        <tr>
            <td><img src="/product/{{$order->image}}" alt="" srcset=""></th>
            <td>{{$order->email}}</td>
            <td>{{$order->name}}</td>
          
            <td>{{$order->payment_status}}</td>
            <td>{{$order->delivery_status}}</td>
            
            

            <td> 
                @if ($order->delivery_status == 'proccessing')
                    
                
                <a class="btn btn-primary" href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered')">Delivered</a>
            @else
        <p>Delivered</p>
    </td>
    <td> <a class="btn btn-secondary" href="{{url('pdf',$order->id)}}">Pdf</a></td>
    <td> <a class="btn btn-info" href="{{url('send_email',$order->id)}}">Send Email</a></td>
        </tr>
        @endif
 @empty
        <tr>
          <td > No data found</td>
        </tr>
       
        @endforelse

       
            
      

      </table>
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
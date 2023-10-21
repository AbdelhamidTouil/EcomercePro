<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<style>

    .input{
        color:black;
    }

 
</style>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            
                            
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
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
                <!-- start product  -->

                <form action="{{url('add_product')}}" method="post" enctype="multipart/form-data">
                    @csrf

                <div class="container-fluid px-1 py-5 mx-auto">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                            
                           
                            <div class="card">
                                
                                <form class="form-card" onsubmit="event.preventDefault()">
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex"> 
                                            <label class="form-control-label px-3">Product title<span class="text-danger"> *</span></label> 
                                            <input class="input"  type="text"  name="title" placeholder="Product title" onblur="validate(1)"> </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                             <label class="form-control-label px-3">Product price<span class="text-danger"> *</span></label> 
                                             <input class="input" type="number"  name="price" min="1" placeholder="Product price" onblur="validate(2)"> </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex"> 
                                            <label class="form-control-label px-3">Discount price<span class="text-danger"> *</span></label>
                                             <input class="input" type="number" min="1"  name="discount_price" placeholder="" onblur="validate(3)">
                                             </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                             <label class="form-control-label px-3">Quantity<span class="text-danger"> *</span></label>
                                              <input class="input" type="number" min="1"  name="quantity" placeholder="" onblur="validate(4)">
                                             </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                             <label class="form-control-label px-3">Category<span class="text-danger"> *</span></label> 
                                            <select class="input" name="category" required="">
                                                <option value="" selected="">Add Category here</option>
                                                @foreach($category as $category)
                                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                         </div>
                                         <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label px-3">Product Image<span class="text-danger"> *</span></label>
                                             <input class="input" type="file"  name="image" onblur="validate(4)">
                                            </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-12 flex-column d-flex">
                                             <label class="form-control-label px-3"> Product Description<span class="text-danger"> *</span></label>
                                              <input class="input" type="text"  name="description" placeholder="Product Description" onblur="validate(6)"> </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="form-group col-sm-6"> <button type="submit" class="btn btn-primary"> Add Product</button> </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
             <!-- end product title -->
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

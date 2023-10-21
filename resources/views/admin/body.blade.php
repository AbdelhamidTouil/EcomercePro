<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="main-panel">
          <div class="content-wrapper">
          
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$totalProduct}}</h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <i class="fa-brands fa-product-hunt"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Products</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$totalOrder}}</h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Orders</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$totalUser}}</h3>
                        
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <i class="fa-solid fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Customers</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">${{$totalRevenue}}</h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <i class="fa-solid fa-minus"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total revenue</h6>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$total_delivered}}</h3>
                        
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                         
                          <i class="fa-solid fa-check"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Orders delivered</h6>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$total_proccessing}}</h3>
                        
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <i class="fa-solid fa-truck"></i>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Orders processing</h6>
                  </div>
                </div>
              </div>
            </div>
     
            
          
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Abdelhamid Touil 2023</span>
            
            </div>
          </footer>
          <!-- partial -->
        </div>
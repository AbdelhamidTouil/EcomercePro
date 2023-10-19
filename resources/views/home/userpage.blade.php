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

      @include('sweetalert::alert')
      <div class="hero_area">
         <!-- header section strats -->
       @include('home.header')
       
         <!-- end header section -->
         <!-- slider section -->
       @include('home.slider')
         <!-- end slider section -->
      </div>
      <!-- product section -->
      @include('home.product')
      <!-- end product section -->
      <!-- why section -->
      @include('home.why')
      <!-- end why section -->
      <!-- arrival section -->
      @include('home.new_arrival')
      <!-- end arrival section -->
      
       <!-- START COMMENT section -->

       @include('home.comment_reply')



        <!-- end COMMENT section  -->

      <!-- subscribe section -->
      <!-- end subscribe section -->
      <!-- client section -->
    
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
  

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pdf</title>
</head>
<body>
     <center><h1>Order Details</h1></center>
   Product Title : <h3>{{$order->name}}</h3>
   Product Email : <h3>{{$order->email}}</h3>
   Product Address :  <h3>{{$order->address}}</h3>
   Product Phone : <h3>{{$order->phone}}</h3>
   Product Price : <h3>{{$order->price}}</h3>
   Product Quantity : <h3>{{$order->quantity}}</h3>
   Delivery Status : <h3>{{$order->delivery_status}}</h3>
   Payment Status : <h3>{{$order->payment_status}}</h3>
   : <br><br>
   <img src="product/{{$order->image}}" alt="" srcset="">
    

</body>
</html>
@extends('layout.master')
@section('content')
<html>
<head>
    <title>Edit Order</title>
</head> 

<body><div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Order Details</div>

                <div class="panel-body">
                    <form action="\updateorder" method="POST">
                    <input type="hidden" name="_token" value="{{{csrf_token()}}}">
                    <input type="hidden" name="id" value="<?= $order->id ?>">
                    ID User :
                    <input type="text" name="iduser" value="<?= $order->iduser ?>" class="form-control">
                    Book Title :
                    <input type="text" name="book_title" value="<?= $order->book_title ?>" class="form-control">
                    Unit Price :
                    <input type="text" name="unitprice" value="<?= $order->unitprice ?>" class="form-control">
                    Quantity :
                    <input type="text"  name="qty" value="<?= $order->qty?>" class="form-control">
                    Total :
                    <input type="text"  name="total" value="<?= $order->total?>" class="form-control">

                    <br/>
                    <input type="Submit" value="Edit Record" class="btn btn-warning">
                    <a href="<?php echo '/orders'?>" class="btn btn-primary">Back</a>
                    </form>

               </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@stop
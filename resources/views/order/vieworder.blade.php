@extends('layout.master')
@section('content')
<html>
<head>
    <title>View Order</title>
</head> 

<body><div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Order Details</div>

                <div class="panel-body">
                    <form>
                   
                    <input type="hidden" name="id" value="<?= $order->id ?>">
                    ID User :
                    <input type="text" name="iduser" readonly value="<?= $order->iduser ?>" class="form-control">
                    Book Title :
                    <input type="text" name="book_title" readonly value="<?= $order->book_title ?>" class="form-control">
                    Unit Price :
                    <input type="text" name="unitprice" readonly value="<?= $order->unitprice ?>" class="form-control">
                    Quantity :
                    <input type="text"  name="qty" readonly value="<?= $order->qty?>" class="form-control">
                    Total :
                    <input type="text"  name="total" readonly value="<?= $order->total?>" class="form-control">

                    <br/>
                    <a href="<?php echo '/edit/'.$order->id ?>" class="btn btn-success">Edit Record</a>
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
@extends('layout.master')
@section('content')

<html>
<head>
    <title>Buy a Book</title>
</head> 

<body><div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Book Details</div>

                <div class="panel-body">
                    <form action="\store" method="POST">
                    <input type="hidden" name="_token" value="{{{csrf_token()}}}">
                     <input type="hidden" value="{{ $book->id }}"name="id"  class="form-control">
                    User ID :
                    <input type="text" readonly value="{{ Auth::user()->id }}"name="iduser"  class="form-control">
                    Title :
                    <input type="text" readonly value="{{ $book->book_title }}" name="book_title"  class="form-control">
                    Unit Price :
                    <input type="text" readonly value="{{ $book->book_price }}" name="unitprice" class="form-control">
                    Quantity
                    <select  name="qty"  class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                    <input type="hidden"  name="total" >
                    <br/>
                    <input type="Submit" value="Add to Cart"  class="btn btn-primary">
                    <a href="<?php echo '/accountuser' ?>" class="btn btn-danger"> Back to Account</a>
         
                </form>
               </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@stop
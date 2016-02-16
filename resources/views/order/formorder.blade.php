@extends('layout.master')
@section('content')

<p style="color:red">{{ $errors->first('book_title')}}</p>
<p style="color:red">{{ $errors->first('unitpice')}}</p>
<p style="color:red">{{ $errors->first('qty')}}</p>

<html>
<head>
    <title>Buy a Book</title>
</head> 

<body>
        <form action="\store" method="POST">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        Book Title :
        <input type="text" readonly value="{{ $book->book_title }}" name="book_title"  class="form-control">
        Unit Price :
        <input type="text" readonly value="{{ $book->book_price }}" name="unitprice" class="form-control">
        Quantity
        <input type="text"  name="qty"  class="form-control">
        <input type="hidden"  name="total" >
        <br/>
        <input type="Submit" value="Add to Cart"  class="btn btn-primary">
    </form>


</body>
</html>
@stop
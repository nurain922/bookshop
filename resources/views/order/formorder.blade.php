@extends('layout.master')
@section('content')

<html>
<head>
    <title>Buy a Book</title>
</head> 

<body>
        <form action="\store" method="POST">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        ID :
        <input type="text" name="iduser"  class="form-control">
        Book Title :
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
    </form>


</body>
</html>
@stop
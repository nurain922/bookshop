@extends('layout.master')
@section('content')



<html>
<head>
    <title>Buy a Book</title>
</head> 

<body>
        <form action="\store" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        Customer Name
        <input type="text" name="cus_name" class="form-control">
        Customer ID
        <input type="text" name="cus_ID" class="form-control">
        Book Title
        <input type="text" name="Book_Title" class="form-control">
        Book Price
        <input type="text"  name="Book_Price" class="form-control">
        <br/>
        <input type="Submit" value="Add to Cart" class="btn btn-primary">
    </form>


</body>
</html>
@stop
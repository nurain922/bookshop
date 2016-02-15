@extends('layout.master')
@section('content')

<html>
<head>
    <title>Add Book</title>
</head> 

<body>
        <form action="\save" method="POST">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        BookTitle : <input type="text" name="book_title" class="form-control">
        BookISBN :<input type="text" name="book_ISBN" class="form-control">
        BookAuthor :<input type="text" name="book_author" class="form-control">
        BookPublisher :<input type="text"  name="book_publisher" class="form-control">
        BookPrice : <input type="text"  name="book_price" class="form-control">
        <br/>
        <input type="Submit" value="Save Record" class="btn btn-primary">
    </form>
</body>
</html>
@stop
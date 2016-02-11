@extends('layout.master')
@section('content')

<html>
<head>
    <title>Add Book</title>
</head> 

<body>
        <form action="\save" method="POST">
        <input type="hidden" name="hidden" value="secret">
        BookTitle
        <input type="text" name="Book_Title" class="form-control">
        BookISBN
        <input type="text" name="Book_ISBN" class="form-control">
        BookAuthor
        <input type="text" name="Book_Author" class="form-control">
        BookPublisher
        <input type="text"  name="Book_Publisher" class="form-control">
        BookPrice
        <input type="text"  name="Book_Price" class="form-control">
        <br/>
        <input type="Submit" value="Save Record" class="btn btn-primary">
    </form>
</body>
</html>
@stop
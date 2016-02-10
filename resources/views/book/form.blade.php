@extends('layout.master')
@section('content')

<html>
<head>
    <title>Add Book</title>
</head>
<body>
        <form action="{{URL::to('save')}}" method="post">
        BookTitle
        <input type="text" id="Book_Title"  name="Book_Title" class="form-control">
        BookISBN
        <input type="text" id="Book_ISBN" name="Book_ISBN" class="form-control">
        BookAuthor
        <input type="text" id="Book_Author" name="Book_Author" class="form-control">
        BookPublisher
        <input type="text" id="Book_Publisher" name="Book_Publisher" class="form-control">
        <br/>
        <input type="submit" value="Save Record" class="btn btn-primary">
    </form>
</body>
</html>
@stop
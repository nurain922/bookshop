@extends('layout.master')
@section('content')
<html>
<head>
    <title>View Book</title>
</head> 

<body>
        <form>
       
        <input type="hidden" name="id" value="<?= $book->id ?>">
        BookTitle :
        <input type="text" name="book_title" readonly value="<?= $book->book_title ?>" class="form-control">
        BookISBN :
        <input type="text" name="book_ISBN" readonly value="<?= $book->book_ISBN ?>" class="form-control">
        BookAuthor :
        <input type="text" name="book_author" readonly value="<?= $book->book_author ?>" class="form-control">
        BookPublisher :
        <input type="text"  name="book_publisher" readonly value="<?= $book->book_publisher?>" class="form-control">
        BookPrice :
        <input type="text"  name="book_price" readonly value="<?= $book->book_price?>" class="form-control">

        <br/>
        <a href="<?php echo '/edit/'.$book->id ?>" class="btn btn-success">Edit Record</a>
        <a href="<?php echo '/books'?>" class="btn btn-primary">Back</a>
    </form>
</body>
</html>
@stop
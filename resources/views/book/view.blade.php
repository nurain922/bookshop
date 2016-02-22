@extends('layout.master')
@section('content')
<html>
<head>
    <title>View Book</title>
</head> 

<body><div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Book Details</div>

                <div class="panel-body">
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
                    <a href="<?php echo '/editbook/'.$book->id ?>" class="btn btn-success">Edit Record</a>
                    <a href="<?php echo '/books'?>" class="btn btn-primary">Back</a>
                    </form>

               </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@stop
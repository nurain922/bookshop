@extends('layout.master')
@section('content')
<html>
<head>
    <title>Edit Book</title>
</head> 

<body><div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Book Details</div>

                <div class="panel-body">
                        <form action="\updatebook" method="POST">
                        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
                        <input type="hidden" name="id" value="<?= $row->id ?>">
                        Title :
                        <input type="text" name="book_title" value="<?= $row->book_title ?>" class="form-control">
                        ISBN :
                        <input type="text" name="book_ISBN" value="<?= $row->book_ISBN ?>" class="form-control">
                        Author :
                        <input type="text" name="book_author" value="<?= $row->book_author ?>" class="form-control">
                        Publisher :
                        <input type="text"  name="book_publisher" value="<?= $row->book_publisher?>" class="form-control">
                        Price :
                        <input type="text"  name="book_price" value="<?= $row->book_price?>" class="form-control">

                        <br/>
                        <input type="Submit" value="Edit Record" class="btn btn-warning">
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
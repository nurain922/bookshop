@extends('layout.master')
@section('content')
<html>
<head>
    <title>Add Book</title>
</head> 

<body>
        <form action="\update" method="POST">
        <input type="hidden" name="hidden" value="secret">
        <input type="hidden" name="id" value="<?= $row->id ?>">
        BookTitle
        <input type="text" name="Book_Title" value="<?= $row->Book_Title ?>" class="form-control">
        BookISBN
        <input type="text" name="Book_ISBN" value="<?= $row->Book_ISBN ?>" class="form-control">
        BookAuthor
        <input type="text" name="Book_Author" value="<?= $row->Book_Author ?>" class="form-control">
        BookPublisher
        <input type="text"  name="Book_Publisher" value="<?= $row->Book_Publisher?>" class="form-control">
        <br/>
        <input type="Submit" value="Edit Record" class="btn btn-primary">
    </form>
</body>
</html>
@stop
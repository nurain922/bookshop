@extends('layout.master')
@section('content')

<html>
<head>
    <title>Add Book</title>
</head> 

<body><div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Book Details</div>

                <div class="panel-body">
                    <form action="\save" method="POST">
                    <input type="hidden" name="_token" value="{{{csrf_token()}}}">
                    BookTitle : <input type="text" name="book_title" class="form-control">
                     @if ($errors->has('book_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_title') }}</strong>
                                    </span>
                                @endif
                    BookISBN :<input type="text" name="book_ISBN" class="form-control">
                     @if ($errors->has('book_ISBN'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_ISBN') }}</strong>
                                    </span>
                                @endif
                    BookAuthor :<input type="text" name="book_author" class="form-control">
                     @if ($errors->has('book_author'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_author') }}</strong>
                                    </span>
                                @endif
                    BookPublisher :<input type="text"  name="book_publisher" class="form-control">
                     @if ($errors->has('book_publisher'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_publisher') }}</strong>
                                    </span>
                                @endif
                    BookPrice : <input type="text"  name="book_price" class="form-control">
                     @if ($errors->has('book_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_price') }}</strong>
                                    </span>
                                @endif
                    <br/>
                    <input type="Submit" value="Save Record" class="btn btn-primary pull-right">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        
</body>
</html>
@stop
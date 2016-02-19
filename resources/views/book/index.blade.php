@extends('layout.master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">


@if(Session::has('message1'))
        <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> Alert!</h4>
        {{ Session::get('message1') }}
        </div>
@endif

@if(Session::has('message2'))
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Alert!</h4>
        {{ Session::get('message2') }}
        </div>
@endif

@if(Session::has('message3'))
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        {{ Session::get('message3') }}
        </div>
@endif

  <table class = "table table-bordered table-hover">
        <thead> 
        	<th>BookID</th>
        	<th>BookTitle</th>
        	<th>BookISBN</th>
        	<th>BookAuthor</th>
        	<th>BookPublisher</th>
        	<th>BookPrice</th>
        	<th><center>Action</center></th>
        </thead>
        <tbody>
			<?php 

			  foreach($book as $row){
			?>
			<tr>
			  <td><?php echo $row->id ?></td>
			  <td><?php echo $row->book_title?></td>
			  <td><?php echo $row->book_ISBN?></td>
			  <td><?php echo $row->book_author?></td>
			  <td><?php echo $row->book_publisher?></td>
			  <td><?php echo $row->book_price?></td>
			  <td>
                    <a href="<?php echo 'book/'.$row->id ?>" class="btn btn-info">View</a>
			  		<a href="<?php echo 'edit/'.$row->id ?>" class="btn btn-warning">Edit</a>
			  		<a href="<?php echo 'delete/'.$row->id ?>" class="btn btn-danger">Delete</a>
			  </td>
			 </tr>
			  <?php } ?>

        </tbody>
  </table>
<center><a href="<?php echo'createbook' ?>" class="btn btn-success">Add New Book </a></center>

        </div>
    </div>
</div>
@stop()
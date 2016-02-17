@extends('layout.master')
@section('content')

@if(Session::has('message'))
        <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-info"></i> Alert!</h4>
        {{ Session::get('message') }}
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
        	<th>Action</th>
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
			  		<a href="<?php echo 'edit/'.$row->id ?>" class="btn btn-success">Edit</a>
			  		<a href="<?php echo 'delete/'.$row->id ?>" class="btn btn-warning">Delete</a>
			  </td>
			 </tr>
			  <?php } ?>

        </tbody>
  </table>

  <a href="<?php echo'createbook' ?>" class="btn btn-info pull-right">Add New Book </a>
@stop()
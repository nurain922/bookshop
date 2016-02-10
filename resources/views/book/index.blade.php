@extends('layout.master')
@section('content')
  <table class = "table table-bordered table-hover">
        <thead> 
        	<th>BookID</th>
        	<th>BookTitle</th>
        	<th>BookISBN</th>
        	<th>BookAuthor</th>
        	<th>BookPublisher</th>
        	<th>Action</th>
        </thead>
        <tbody>
			<?php 

			  foreach($book as $row){
			?>
			<tr>
			  <td><?php echo $row->id ?></td>
			  <td><?php echo $row->Book_Title?></td>
			  <td><?php echo $row->Book_ISBN?></td>
			  <td><?php echo $row->Book_Author?></td>
			  <td><?php echo $row->Book_Publisher?></td>
			  <td>
			  		<a href="<?php echo 'EditProduct/'.$row->id ?>">Edit</a>
			  		<a href="<?php echo 'DeleteProduct/'.$row->id ?>">Delete</a>
			  </td>
			 </tr>
			  <?php } ?>

        </tbody>
        	
        	
  </table>
@stop()
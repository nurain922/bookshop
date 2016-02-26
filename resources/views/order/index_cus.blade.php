@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            
  <table class = "table table-bordered table-hover">
        <thead> 
            <th>Book ID</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Price</th>
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
                    <a href="<?php echo 'createorder/'.$row->id ?>" class="btn btn-success"> Add to Cart</a>
                    
              </td>
             </tr>
              <?php } ?>
		<?php echo $book->render()?>
        </tbody>
  </table>
  <a href="<?php echo '/accountuser' ?>" class="btn btn-danger"> Back to Account</a>
</div>
</div>
</div>
  
@stop()
@extends('layout.master')
@section('content')

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
                    <a href="<?php echo 'Buy/'.$row->id ?>" class="btn btn-success"<i class="fa fa-plus-square"></i> >Add to Cart</a>
                    
              </td>
             </tr>
              <?php } ?>

        </tbody>
  </table>
@stop()
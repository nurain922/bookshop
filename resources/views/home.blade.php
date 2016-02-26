@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                    This is for admin side! You can see admin view now.
                </div>
            </div>
        </div>
          <div class="col-md-10 col-md-offset-1 text-center">
            <div class="panel panel-default">
               <div class="panel-heading">Admin</div>
                <div class="panel-body">
            <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Order</h3>
                  <p>List of Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{('/orders')}}" class="small-box-footer">Click Here! <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Book</h3>
                  <p>List of Books</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="{{('/books')}}" class="small-box-footer">Go checks <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>User</h3>
                  <p>List of Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{('/users')}}" class="small-box-footer">Check this out! <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
              </div>
            </div>
        </div>


            <div class="col-md-10 col-md-offset-1 text-center">
            <div class="panel panel-default">
               <div class="panel-heading">User</div>
                <div class="panel-body">
               <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Account</h3>
                  <p>View Your Order</p>
                </div>
                <div class="icon">
                  <i class="fa fa-briefcase"></i>
                </div>
                <a href="/accountuser" class="small-box-footer">Click Here!<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
                 <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>Create</h3>
                  <p>Create An Order</p>
                </div>
                <div class="icon">
                  <i class="fa fa-briefcase"></i>
                </div>
                <a href="/createorders" class="small-box-footer">Click Here!<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
             </div>
            </div>
        </div>
          
    </div>
</div>
@endsection
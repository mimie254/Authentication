@extends('admin.admin_master')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Author Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
      <p class="login-box-msg">Add New Author</p>
      @include('layouts.flash')
      <form method="POST" action="{{ route('authors.store') }}">
        
      @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" required autofocus  placeholder="Author Name"> 
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nationality"  required placeholder="Nationality">
         </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="no_of_books_published"  placeholder="No of Books Published">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="awards_won"  placeholder="Awards won">
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="best_selling_book" placeholder="Best Selling Book">
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="reviews" placeholder="Reviews">
        </div>
        
        
  </div>
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Add Author</button>
            
          </div>
          <!-- /.col -->
        </div>
    
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

            
    @endsection
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
              <li class="breadcrumb-item active">Book Form</li>
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
      <p class="login-box-msg">Add a new book</p>
      @include('layouts.flash')
      <form method="POST" action="{{ route('books.store') }}">
        
      @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="title" value="{{old('title')}}"  autofocus  placeholder="Book Title"> 
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="author" value="{{old('author')}}"  placeholder="Author">
         </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" name="year_of_publish" value="{{__('year_of_publish')}}" placeholder="Year of publish">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="cover_photo"  placeholder="cover_photo">
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="categories" placeholder="categories">
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="remarks" placeholder="remarks">
        </div>
        
        
  </div>
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Add Book</button>
            
          </div>
          <!-- /.col -->
        </div>
    
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

            
    @endsection
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
              <li class="breadcrumb-item active">Author Edit Form</li>
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
      <p class="login-box-msg">Update Author</p>
      @include('layouts.flash')

<form method="post" action="{{route('authors.update',[$data->id])}}">
@csrf
@method('PUT')
    <div class="input-group mb-3"> 
    <input type="hidden" name="id" value="{{$data['id']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="name" value="{{$data['name']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="nationality" value="{{$data['nationality']}}"> 
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="no of books published" value="{{$data['no_of_books_published']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="awards_won" value="{{$data['awards_won']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="best_selling_book" value="{{$data['best_selling_book']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="reviews" value="{{$data['reviews']}}">
    </div>
    <div class="input-group mb-3"> 
    <button type="submit">update</button>
    </div>

</form>
</div>
          
         
        </div>
    
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

            
    @endsection

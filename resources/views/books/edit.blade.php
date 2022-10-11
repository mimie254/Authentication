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
              <li class="breadcrumb-item active">Book Edit Form</li>
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
      <p class="login-box-msg">Update Book</p>
      @include('layouts.flash')

<form method="post" action="{{route('books.update',[$data->id])}}">
@csrf
@method('PUT')
    <div class="input-group mb-3"> 
    <input type="hidden" name="id" value="{{$data['id']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="title" value="{{$data['title']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="author" value="{{$data['author']}}"> 
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="year_of_publish" value="{{$data['year_of_publish']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="cover_photo" value="{{$data['cover_photo']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="categories" value="{{$data['categories']}}">
    </div>
    <div class="input-group mb-3"> 
    <input type="text" name="remarks" value="{{$data['remarks']}}">
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

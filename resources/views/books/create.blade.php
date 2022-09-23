

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Add a new book</p>
      @include('layouts.flash')
      <form method="POST" action="{{ route('register') }}">
        
      @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="title" value="{{old('title')}}" required autofocus  placeholder="Book Title"> 
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="author" value="{{old('author')}}" required placeholder="Author">
         </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" name="year_of_publish" value="{{__('year_of_publish')}}" placeholder="Year of publish">
        </div>
        <div class="input-group mb-3">
          <input type="image" class="form-control" name="cover_photo" value="{{__('cover_photo')}}" placeholder="cover photo">
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="categories" value="{{__('categories')}}" placeholder="categories">
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="remarks" value="{{__('remarks')}}" placeholder="remarks">
        </div>
        
        <div class="input-group mb-3">
        <label for="inputZip" class="form-label">Status</label>
    <br>
    <br>
    <div class="form-check" >
  <input class="form-check-input" name="status" value="complete" type="radio" >
  <label class="form-check-label" for="Complete">
  Complete
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" name="status" value="incomplete" type="radio"  >
  <label class="form-check-label" for="Incomplete">
    Incomplete
  </label>
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
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>


@extends('admin.admin_master')
@section('admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Content Header (Page header) -->
        @if(session('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                {{session('status')}}
            </div>
        @endif
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Users DataTable </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Is Admin</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{$user->name }}</td>
                                            <td>{{ $user->email}}</td>
                                            
                                            
                                            <td>
                                                {{$user->decoded_isadmin}}
                                            </td>
                                            <td>  
                                                <a href="/users/{{$user->id}}/edit"> <input type="button"
                                                                                                name="edit"
                                                                                                value="EDIT"> </a>
                                                                                                </td>
                                            <td>

                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#myModal_{{$user->id}}">
                                                    Delete
                                                </button>
                                                <div class="modal modal-danger fade" id="myModal_{{$user->id}}"
                                                     id="deleteModal" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title text-center">Delete
                                                                    Confirmation</h4>
                                                            </div>

                                                            <form action="{{route('users.destroy',$user->id) }}"
                                                                  method="POST">
                                                            {{@csrf_field()}}
                                                            @method('DELETE')
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="_method"
                                                                           value="DELETE"></input>
                                                                    <p class="text-center">
                                                                        Are you sure you want to
                                                                        delete {{$user->name}}?
                                                                    </p>


                                                                </div>
                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success"
                                                                            data-bs-dismiss="modal">No Close
                                                                    </button>
                                                                    <button type="submit" class="btn btn-warning">Yes,
                                                                        Delete
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card -->


                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection

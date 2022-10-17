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
                                <h3 class="card-title">Author DataTable </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Nationality</th>
                                        <th>No of Books Published</th>
                                        <th>Awards won</th>
                                        <th>Best Selling Book</th>
                                        <th>Reviews</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($authors as $author)
                                        <tr>
                                            <td>{{ $author->id }}</td>
                                            <td>{{$author->name }}</td>
                                            <td>{{ $author->nationality}}</td>
                                            <td>{{ $author->no_of_books_published}}</td>
                                            <td>{{ $author->awards_won }}</td>
                                            <td>{{ $author->best_selling_book }}</td>
                                            <td>{{ $author->reviews}}</td>
                                            <td>
                                                <a href="/authors/{{$author->id}}/edit"> <input type="button"
                                                                                                name="edit"
                                                                                                value="EDIT"> </a>
                                            </td>
                                            <td>

                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#myModal_{{$author->id}}">
                                                    Delete
                                                </button>
                                                <div class="modal modal-danger fade" id="myModal_{{$author->id}}"
                                                     id="deleteModal" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title text-center">Delete
                                                                    Confirmation</h4>
                                                            </div>

                                                            <form action="{{route('authors.destroy',$author->id) }}"
                                                                  method="POST">
                                                            {{@csrf_field()}}
                                                            @method('DELETE')
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="_method"
                                                                           value="DELETE"></input>
                                                                    <p class="text-center">
                                                                        Are you sure you want to
                                                                        delete {{$author->name}}?
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
    </div>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>

        <
        script
        type = "text/javascript" >

            $(document).ready(function () {
                var table = $('#datatable').DataTable();

                //Delete Record
                table.on('click', '.delete', function () {

                    $tr = $(this).closest('tr');
                    if ($($tr).hasClass('child')) {
                        $tr = $tr.prev('.parent');
                    }

                    var data = table.row($tr).data();
                    console.log(data);

                    $('#id').val(data[0])

                    $('#deleteForm').attr('action', '/author/' + data[0]);
                    $('#deleteModal').modal('show');
                });
            });
    </script>

@endsection

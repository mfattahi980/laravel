@extends("master")

@section("style-plugin")
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection


@section("content")

    <a href="/groups/create" class="btn btn-success my-4">Add a new Group</a>
    <h6 class="mb-0 text-uppercase">DataTable Import</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th class="w-25">Description</th>
                        <th>Update At</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($groups as $index=>$group)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$group->name}}</td>
                        <td class="w-25">{{$group->description}}</td>
                        <td>{{$group->updated_at}}</td>
                        <td class="fs-3">
                            <form action="/groups/delete/{{$group->id}}" method="post" class="text-decoration-none ">
                                @method("DELETE")
                                @csrf
                                <button class="border border-0" type="submit"><i class="fadeIn animated bx bx-trash text-danger"></i></button>
                            </form>
                            <a href="/groups/edit/{{$group->id}}" class="text-decoration-none ">
                                <i class="fadeIn animated bx bx-message-square-edit text-warning"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section("scripts-plugin")
    <script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'print']
            } );

            table.buttons().container()
                .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
        } );
    </script>
    <!--app JS-->
@endsection



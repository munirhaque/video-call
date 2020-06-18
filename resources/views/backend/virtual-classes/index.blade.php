@extends('layouts.backend.master')
@section('title')Virtual Classes @endsection
@section('extra-section')
    {!! Html::style('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}
@endsection


@section('section-title')
    All Classes
    <a href="{{route('virtualclass.new')}}" class="btn btn-primary pull-right"><span><i class="fas fa-chalkboard-teacher"></i></span> NEW CLASS</a>
@endsection
@section('main-content')
    @include('layouts.backend.partials.alerts')
    <form>
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" id="custom_search" placeholder="Search Class">
            </div>
        </div>
    </form>
    <div>
        <table id="Datatable" class="table-responsive table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
            <tr>
                <th>S\N</th>
                <th>Class Topic</th>
                <th>Class ID</th>
                <th>Time</th>
                <th>Duration</th>
                <th>Details</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>S\N</th>
                <th>Class Topic</th>
                <th>Class ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Details</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($classes as $class)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$class->title}}</td>
                    <td>{{$class->class_id}}</td>
                    <td>{{$class->start_date}}</td>
                    <td>{{$class->start_time}}</td>
                    <td><a href="#" class="btn btn-info waves-effect btn-bg">Details</a></td>
                    <td><a href="#" class="btn btn-warning waves-effect btn-bg ">Edit</a></td>
                    <td><a href="#" class="btn btn-danger waves-effect">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Branch Delete Dialogue</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <a href="#" ></a>
                    {{--{!! Form::open(['method'=>'delete','route' => ['branches.delete']]) !!}--}}
                    <input type="text" name="employee_id" id="employee_id" value="" hidden="hidden" />
                    <h2 class="col-red">Do You Really Want to Delete ?</h2>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    {{--{!! Form::submit("YES", ['class'=>'btn btn-danger pull-left']) !!}--}}
                    {{-- {!! Form::close() !!}--}}
                    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('custom-scripts')


    <script type="text/javascript">
        $(document).ready(function(){


            var table = $('#Datatable').DataTable({
                'paging'      : true,
                'pagingType':'full_numbers',
                'ordering'    : false,
                'info'        : false,
                'autoWidth'   : false,
                'lengthChange':false,
            });


            $('#custom_search').on( 'keyup', function () {
                table.search( this.value ).draw();
            });
            $("#Datatable_filter").hide();


            $(document).on("click", "#delete-employee", function () {
                var employee_id = $(this).data('id');
                $(".modal-body #employee_id").val(employee_id);
            });


        });


    </script>
@endsection

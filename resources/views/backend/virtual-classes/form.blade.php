@extends('layouts.backend.master')
@section('title')NEW CLASS @endsection



@section('section-title')<b>NEW CLASS </b>@endsection
@section('main-content')
    @include('layouts.backend.partials.errors')
    {!! Form::open(['route'=> 'virtualclass.save']) !!}

    <div class="form-group">
        <div class="form-line">
            {!! Form::text('title',null, ['class'=>'form-control', 'placeholder'=>'Class title']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            <select class="form-control show-tick" name="school">
                <option value="">--Please Select School--</option>
                <option value="1">Mirpur Govt. High School</option>
                <option value="2">Viquarunnisa Noon School & College</option>
                <option value="3">Mohammadpur Preparatory School & College.</option>
                <option value="4">Ganobhaban Government High School	</option>
                <option value="5">Saint Joseph Higher Secondary School</option>
                <option value="6">Monipur High School</option>
                <option value="7">Motijhil Ideal School & College</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            <select class="form-control show-tick" name="class">
                <option value="">--Please Select Class--</option>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
                <option value="6">Class 6</option>
                <option value="7">Class 7</option>
                <option value="8">Class 8</option>
                <option value="9">Class 9</option>
                <option value="10">Class 10</option>
                <option value="11">Class 11</option>
                <option value="12">Class 12</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
                <select class="form-control show-tick" name="subject">
                    <option value="">--Please Select Subject--</option>
                    <option value="1">Bangla</option>
                    <option value="2">English</option>
                    <option value="3">Mathamatics</option>
                    <option value="4">Social Science</option>
                    <option value="5">Physics</option>
                    <option value="6">Chemistry</option>
                    <option value="7">Biology</option>
                    <option value="8">Islamic Studies</option>
                </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            <select class="form-control show-tick" name="topic">
                <option value="">--Please Select Topic--</option>
                <option value="Gravity">Gravity</option>
                <option value="Force">Force</option>
                <option value="Velocity">Velocity</option>
                <option value="Modern Physics">Modern Physics</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            <select class="form-control show-tick" name="student">
                <option value="">--Please Select Student--</option>
                <option value="1">Md Jamal</option>
                <option value="2">Md Selim</option>
                <option value="3">Mr Rocky</option>
                <option value="4">Jamal Hosen</option>
                <option value="5">Nafiz Hosen</option>
                <option value="6">Akbor Ali</option>
                <option value="7">Jahangir Alom</option>
                <option value="8">Sujon Khan</option>
                <option value="9">Sobuj Sen</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            {!! Form::date('date',null, ['class'=>'form-control', 'placeholder'=>'Class Date']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            {!! Form::time('time',null, ['class'=>'form-control', 'placeholder'=>'Class Time']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="form-line">
            {!! Form::number('duration',null, ['class'=>'form-control', 'placeholder'=>'Duration','min'=>5]) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit('SAVE', ['class'=>'btn btn-primary waves-effect']) !!}
    </div>
    {!! Form::close() !!}

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

        });
    </script>
@endsection

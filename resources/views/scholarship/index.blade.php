@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Student ID: {{$student->id}}'s information (please add your past scholarship)</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (isset($success))
                            <div class="alert alert-success">
                                <strong> Success!</strong> {{$success}}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('forms/address/'.$student->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="container">
                                <div class="row clearfix">
                                    <div class="col-md-10 column">
                                        <table class="table table-bordered table-hover" id="tab_logic">
                                            <thead>
                                            <tr >
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th class="text-center">
                                                    year (พศ.)
                                                </th>
                                                <th class="text-center">
                                                    type (ประเภทของทุน)
                                                </th>
                                                <th class="text-center">
                                                    name (ชื่อทุนการศึกษา)
                                                </th>
                                                <th class="text-center">
                                                    amount (จำนวน-บาท)
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr id='addr0'>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <input type="text" name='year0'  placeholder='Year' class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name='type0' placeholder='Type' class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name='name0' placeholder='Name' class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name='amount0' placeholder='Amount' class="form-control"/>
                                                </td>
                                            </tr>
                                            <tr id='addr1'></tr>
                                            </tbody>
                                        </table>
                                        <a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
                                    </div>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" language="javascript">
        $(document).ready(function(){
            var i=1;
            $("#add_row").click(function(){
                $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='year"+i+"' type='text' placeholder='Year' class='form-control input-md'  /> </td><td><input  name='type"+i+"' type='text' placeholder='Type'  class='form-control input-md'></td><td><input  name='name"+i+"' type='text' placeholder='Name'  class='form-control input-md'></td><td><input name='amount"+i+"' type='text' placeholder='Amount' class='form-control input-md'  /> </td>");

                $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
                i++;
            });
            $("#delete_row").click(function(){
                if(i>1){
                    $("#addr"+(i-1)).html('');
                    i--;
                }
            });

        });
    </script>
@endsection
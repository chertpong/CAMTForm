@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Student ID: {{$student->id}}'s information</div>
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
                                    <div class="col-md-8 column">
                                        <table class="table table-bordered table-hover" id="tab_logic">
                                            <thead>
                                            <tr >
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th class="text-center">
                                                    Name
                                                </th>
                                                <th class="text-center">
                                                    Mail
                                                </th>
                                                <th class="text-center">
                                                    Mobile
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr id='addr0'>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <input type="text" name='name0'  placeholder='Name' class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name='mail0' placeholder='Mail' class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name='mobile0' placeholder='Mobile' class="form-control"/>
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
                $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Mail'  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='Mobile'  class='form-control input-md'></td>");

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
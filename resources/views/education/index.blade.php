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
            $("#skill").val({{$student->skill}});
            $("#race").val({{$student->race}});
            $("#nationality").val({{$student->nationality}});
            $("#gender").val({{$student->gender}});
            $("#prefix").val({{$student->prefix}});
            $("#major").val({{$student->major}});
            $("#degree").val({{$student->degree}});
        });
    </script>
@endsection
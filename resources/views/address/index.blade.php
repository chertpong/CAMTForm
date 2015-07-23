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

                            <div class="form-group">
                                <label class="col-md-4 control-label">Number (บ้านเลขที่)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="number" value="{{ $student->id }}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Village (หมู่บ้าน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="village" value="{{ $student->identication_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Street (หมู่บ้าน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="street" value="{{ $student->identication_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Road (หมู่บ้าน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="road" value="{{ $student->identication_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Sub district (หมู่บ้าน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="sub_distric" value="{{ $student->identication_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">District (หมู่บ้าน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="distric" value="{{ $student->identication_no }}">
                                </div>
                            </div><div class="form-group">
                                <label class="col-md-4 control-label">Province/City (หมู่บ้าน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="province" value="{{ $student->identication_no }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Postal (หมู่บ้าน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="postal" value="{{ $student->identication_no }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
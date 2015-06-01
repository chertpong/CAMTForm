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
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('forms/students/'.$student->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Student ID</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="id" value="{{ $student->id }}" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">ID number (เลขบัตรประชาชน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="identication_no" value="{{ $student->identication_no }}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">First name (ชื่อ)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Last name(นามสกุล)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="lastname" value="{{ $student->lastname }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date of birth(เดือน/วัน/ปี)</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="DOB" value="{{ $student->DOB }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Race (เชื้อชาติ)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="race" value="{{ $student->race }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nationality (สัญชาติ)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nationality" value="{{ $student->nationality }}">
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

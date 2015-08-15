@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Student ID: {{$familymember->name}}'s information</div>
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
                                    <input type="text" class="form-control" name="number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Village (หมู่บ้าน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="village">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Street (ซอย)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="street">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Road (ถนน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="road">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Sub district (ดำบล/แขวง)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="sub_district">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">District (อำเภอ/เขต)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="district">
                                </div>
                            </div><div class="form-group">
                                <label class="col-md-4 control-label">Province/City (จังหวัดเ)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="province">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Postal (รหัสไปษณีย์)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="postal">
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

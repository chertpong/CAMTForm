@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Student ID: {{$student->id}} {{$parent}}'s information</div>
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
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('forms/family/address/'.$parent.'/'.$student->id.'/'.$familymember->id) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Number (บ้านเลขที่)</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="number" @if(isset($address))value="{{$address->number}}"@endif>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Village (หมู่บ้าน)</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="village" @if(isset($address))value="{{$address->number}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Street (ซอย)</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="street" @if(isset($address))value="{{$address->number}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Road (ถนน)</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="road" @if(isset($address))value="{{$address->number}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Sub district (ดำบล/แขวง)</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="sub_district" @if(isset($address))value="{{$address->number}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">District (อำเภอ/เขต)</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="district" @if(isset($address))value="{{$address->number}}"@endif>
                                    </div>
                                </div><div class="form-group">
                                    <label class="col-md-4 control-label">Province/City (จังหวัดเ)</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="province" @if(isset($address))value="{{$address->number}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Postal (รหัสไปษณีย์)</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="postal" @if(isset($address)) value="{{$address->number}}"@endif>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span><div class="col-md-2 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                <div class="col-md-2 ">
                                    <a href="{{ url('forms') }}"> <button type="button" class="btn btn-primary">Back</button></a>
                                </div>
                                </span>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Student ID: {{$student->id}}'s form</div>
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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('forms/image/'.$student->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Student (5 mb)</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">House 1 (5 mb)</label>
                            <input type="file" name="house1" id="house1">
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">House 2 (5 mb)</label>
                            <input type="file" name="house2" id="house2">
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
@endsection
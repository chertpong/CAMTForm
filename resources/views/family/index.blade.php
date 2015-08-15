@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Student ID: {{$student->id}}'s form</div>
                    @if (isset($success))
                        <div class="alert alert-success">
                            <strong> Success!</strong> {{$success}}
                        </div>
                    @endif
                    <div class="panel-body">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <a class="list-group-item" href="{{url('forms/family/Father/'.$student->id)}}">Father</a>
                                <a class="list-group-item" href="{{url('forms/family/Mother/'.$student->id)}}">Mother</a>
                                <a class="list-group-item" href="{{url('forms/family/Patent/'.$student->id)}}">Parent</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Student ID: {{$student->id}}'s form</div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <a class="list-group-item" href="{{url('forms/students/'.$student->id)}}">Student</a>
                                <a class="list-group-item" href="">Family</a>
                                <a class="list-group-item" href="">Military</a>
                                <a class="list-group-item" href="">Scholarship</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
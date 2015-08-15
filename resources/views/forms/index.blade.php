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
                                <a class="list-group-item" href="{{url('forms/students/'.$student->id)}}">Student(ข้อมูลทั่วไป)</a>
                                <a class="list-group-item" href="{{url('forms/address/'.$student->id)}}">Address(ข้อมูลที่อยู่อาศัย)</a>
                                <a class="list-group-item" href="{{url('forms/family/'.$student->id)}}">Family(ข้อมูลครอบครัว)</a>
                                <a class="list-group-item" href="{{url('forms/scholarship/'.$student->id)}}">Scholarship(ข้อมูลทุนการศึกษา)</a>
                                <a class="list-group-item" href="{{url('forms/education/'.$student->id)}}">Education(ประวัติการศึกษา)</a>
                                <a class="list-group-item" href="{{url('forms/studentLoan/'.$student->id)}}">Student Loan(ข้อมูลนักศึกษากู้ยืม)</a>
                                <a class="list-group-item" href="{{url('forms/image/'.$student->id)}}">Student's Image (ภาพนักศึกษา)</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

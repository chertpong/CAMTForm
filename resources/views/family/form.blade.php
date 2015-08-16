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
                            @if(isset($familymember))
                                {{--todo--}}
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('forms/family/form/'.$student->id) }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Relation (ความสัมพันธ์)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="relation_s" value={{$parent}} disabled>
                                            <input type="hidden" name="relation" value="{{$parent}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">ID number (เลขบัตรประชาชน)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="identication_no" value="{{$familymember->identication_no}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">First name (ชื่อ)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="name" value="{{$familymember->name}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Last name(นามสกุล)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="lastname" value="{{$familymember->lastname}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Date of birth(เดือน/วัน/ปี)<br>ตัวอย่าง 04/12/1994</label>
                                        <div class="col-md-6">
                                            <input id="date" type="date" class="form-control" name="DOB" value="{{$familymember->DOB}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Status(สถานะภาพ)</label>
                                        <div class="col-md-6">
                                            <select id="status" name="status" class="form-control" >
                                                <option value="0" disabled selected >Please select</option>
                                                <option value="1">เสียชีวิตแล้ว</option>
                                                <option value="2">ยังมีชีวิต</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Degree(การศึกษาสูงสุด)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="degree" value="{{$familymember->degree}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">College(สถานศึกษา)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="college" value="{{$familymember->college}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Job (อาชีพ)</label>
                                        <div class="col-md-6">
                                            <select id="job" name="job" class="form-control">
                                                <option value="0" disabled selected >Please select</option>
                                                <option value="1">รับราชการ/รัฐวิสาหกิจ</option>
                                                <option value="2">ค้าขาย-เจ้าของกิจการ</option>
                                                <option value="3">ค้าขาย-แผงลอย</option>
                                                <option value="4">ค้าขาย-เช่าร้าน</option>
                                                <option value="5">เกษตรกร-ทำไร่/ทำสวน</option>
                                                <option value="6">เกษตรกร-เสี้ยงสัตว์</option>
                                                <option value="7">อื่นๆ</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">job detail (รายละเอียดเกี่ยวกับอาชีพ)</label>
                                        <div class="col-md-6">
                                            <textarea name="job_detail" class="form-control" rows="4">{{$familymember->job_detail}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Land(เป็นเจ้าของที่ดิน/ไร่)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="land_owner" value="{{$familymember->land_owner}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Inncome per month(รายได้รายเดือน/บาท)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="income_month" value="{{$familymember->income_month}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Inncome per year(รายได้รายปี/บาท)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="income_year" value="{{$familymember->income_year}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Phone number(เบอร์โทรศัพท์)</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="phone_number" value="{{$familymember->phone_number}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                <span><div class="col-md-2 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                <div class="col-md-2 ">
                                    <a href="{{ url('forms/family/address/'.$parent.'/'.$student->id.'/'.$familymember->id) }}"> <button type="button" class="btn btn-primary" {{$dis}}>Next>> </button></a>
                                </div>
                                </span>
                                    </div>
                                </form>
                            @else
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('forms/family/form/'.$student->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Relation (ความสัมพันธ์)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="relation_s" value={{$parent}} disabled>
                                    <input type="hidden" name="relation" value="{{$parent}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">ID number (เลขบัตรประชาชน)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="identication_no">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">First name (ชื่อ)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Last name(นามสกุล)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="lastname">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date of birth(เดือน/วัน/ปี)<br>ตัวอย่าง 04/12/1994</label>
                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="DOB">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status(สถานะภาพ)</label>
                                <div class="col-md-6">
                                    <select id="status" name="status" class="form-control">
                                        <option value="0" disabled selected >Please select</option>
                                        <option value="1">เสียชีวิตแล้ว</option>
                                        <option value="2">ยังมีชีวิต</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Degree(การศึกษาสูงสุด)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="degree">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">College(สถานศึกษา)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="college">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Job (อาชีพ)</label>
                                <div class="col-md-6">
                                    <select id="job" name="job" class="form-control">
                                        <option value="0" disabled selected >Please select</option>
                                        <option value="1">รับราชการ/รัฐวิสาหกิจ</option>
                                        <option value="2">ค้าขาย-เจ้าของกิจการ</option>
                                        <option value="3">ค้าขาย-แผงลอย</option>
                                        <option value="4">ค้าขาย-เช่าร้าน</option>
                                        <option value="5">เกษตรกร-ทำไร่/ทำสวน</option>
                                        <option value="6">เกษตรกร-เสี้ยงสัตว์</option>
                                        <option value="7">อื่นๆ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">job detail (รายละเอียดเกี่ยวกับอาชีพ)</label>
                                <div class="col-md-6">
                                    <textarea name="job_detail" class="form-control" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Land(เป็นเจ้าของที่ดิน/ไร่)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="land_owner">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Inncome per month(รายได้รายเดือน/บาท)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="income_month">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Inncome per year(รายได้รายปี/บาท)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="income_year">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone number(เบอร์โทรศัพท์)</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phone_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <span><div class="col-md-2 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="col-md-2 ">
                                   <a href="{{ url('forms/family/address/'.$parent.'/'.$student->id) }}"> <button type="button" class="btn btn-primary" {{$dis}}>Next>> </button></a>
                                </div>
                                </span>
                            </div>
                        </form>
                                @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


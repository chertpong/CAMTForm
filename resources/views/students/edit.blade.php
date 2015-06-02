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
                            <input name="_method" type="hidden" value="PUT">

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
                                <label class="col-md-4 control-label">Date of birth(เดือน/วัน/ปี)<br>ตัวอย่าง 04/12/1994</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="DOB" value="{{ $student->DOB }}">
                                </div>
                            </div>

                            <?php
                            $nationals = [
                                    'Afghan',
                                    'Albanian',
                                    'Algerian',
                                    'American',
                                    'Andorran',
                                    'Angolan',
                                    'Antiguans',
                                    'Argentinean',
                                    'Armenian',
                                    'Australian',
                                    'Austrian',
                                    'Azerbaijani',
                                    'Bahamian',
                                    'Bahraini',
                                    'Bangladeshi',
                                    'Barbadian',
                                    'Barbudans',
                                    'Batswana',
                                    'Belarusian',
                                    'Belgian',
                                    'Belizean',
                                    'Beninese',
                                    'Bhutanese',
                                    'Bolivian',
                                    'Bosnian',
                                    'Brazilian',
                                    'British',
                                    'Bruneian',
                                    'Bulgarian',
                                    'Burkinabe',
                                    'Burmese',
                                    'Burundian',
                                    'Cambodian',
                                    'Cameroonian',
                                    'Canadian',
                                    'Cape Verdean',
                                    'Central African',
                                    'Chadian',
                                    'Chilean',
                                    'Chinese',
                                    'Colombian',
                                    'Comoran',
                                    'Congolese',
                                    'Costa Rican',
                                    'Croatian',
                                    'Cuban',
                                    'Cypriot',
                                    'Czech',
                                    'Danish',
                                    'Djibouti',
                                    'Dominican',
                                    'Dutch',
                                    'East Timorese',
                                    'Ecuadorean',
                                    'Egyptian',
                                    'Emirian',
                                    'Equatorial Guinean',
                                    'Eritrean',
                                    'Estonian',
                                    'Ethiopian',
                                    'Fijian',
                                    'Filipino',
                                    'Finnish',
                                    'French',
                                    'Gabonese',
                                    'Gambian',
                                    'Georgian',
                                    'German',
                                    'Ghanaian',
                                    'Greek',
                                    'Grenadian',
                                    'Guatemalan',
                                    'Guinea-Bissauan',
                                    'Guinean',
                                    'Guyanese',
                                    'Haitian',
                                    'Herzegovinian',
                                    'Honduran',
                                    'Hungarian',
                                    'I-Kiribati',
                                    'Icelander',
                                    'Indian',
                                    'Indonesian',
                                    'Iranian',
                                    'Iraqi',
                                    'Irish',
                                    'Israeli',
                                    'Italian',
                                    'Ivorian',
                                    'Jamaican',
                                    'Japanese',
                                    'Jordanian',
                                    'Kazakhstani',
                                    'Kenyan',
                                    'Kittian and Nevisian',
                                    'Kuwaiti',
                                    'Kyrgyz',
                                    'Laotian',
                                    'Latvian',
                                    'Lebanese',
                                    'Liberian',
                                    'Libyan',
                                    'Liechtensteiner',
                                    'Lithuanian',
                                    'Luxembourger',
                                    'Macedonian',
                                    'Malagasy',
                                    'Malawian',
                                    'Malaysian',
                                    'Maldivan',
                                    'Malian',
                                    'Maltese',
                                    'Marshallese',
                                    'Mauritanian',
                                    'Mauritian',
                                    'Mexican',
                                    'Micronesian',
                                    'Moldovan',
                                    'Monacan',
                                    'Mongolian',
                                    'Moroccan',
                                    'Mosotho',
                                    'Motswana',
                                    'Mozambican',
                                    'Namibian',
                                    'Nauruan',
                                    'Nepalese',
                                    'New Zealander',
                                    'Nicaraguan',
                                    'Nigerian',
                                    'Nigerien',
                                    'North Korean',
                                    'Northern Irish',
                                    'Norwegian',
                                    'Omani',
                                    'Pakistani',
                                    'Palauan',
                                    'Panamanian',
                                    'Papua New Guinean',
                                    'Paraguayan',
                                    'Peruvian',
                                    'Polish',
                                    'Portuguese',
                                    'Qatari',
                                    'Romanian',
                                    'Russian',
                                    'Rwandan',
                                    'Saint Lucian',
                                    'Salvadoran',
                                    'Samoan',
                                    'San Marinese',
                                    'Sao Tomean',
                                    'Saudi',
                                    'Scottish',
                                    'Senegalese',
                                    'Serbian',
                                    'Seychellois',
                                    'Sierra Leonean',
                                    'Singaporean',
                                    'Slovakian',
                                    'Slovenian',
                                    'Solomon Islander',
                                    'Somali',
                                    'South African',
                                    'South Korean',
                                    'Spanish',
                                    'Sri Lankan',
                                    'Sudanese',
                                    'Surinamer',
                                    'Swazi',
                                    'Swedish',
                                    'Swiss',
                                    'Syrian',
                                    'Taiwanese',
                                    'Tajik',
                                    'Tanzanian',
                                    'Thai',
                                    'Togolese',
                                    'Tongan',
                                    'Trinidadian/Tobagonian',
                                    'Tunisian',
                                    'Turkish',
                                    'Tuvaluan',
                                    'Ugandan',
                                    'Ukrainian',
                                    'Uruguayan',
                                    'Uzbekistani',
                                    'Venezuelan',
                                    'Vietnamese',
                                    'Welsh',
                                    'Yemenite',
                                    'Zambian',
                                    'Zimbabwean'
                            ];
                                $nationalsSize = count($nationals);
                            ?>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nationality (สัญชาติ)</label>
                                <div class="col-md-6">
                                    <select id="nationality" name="nationality" class="form-control">
                                        <option value="" disabled @if($student->gender == null) selected @endif>Please select</option>
                                        @for($i = 0; $i<$nationalsSize; $i++)
                                            <option value="{{$i+1}}">{{$nationals[$i]}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Race (เชื้อชาติ)</label>
                                <div class="col-md-6">
                                    <select id="race" name="race" class="form-control">
                                        <option value="" disabled @if($student->race == null) selected @endif>Please select</option>
                                        @for($i = 0; $i<$nationalsSize; $i++)
                                            <option value="{{$i+1}}">{{$nationals[$i]}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Gender (เพศ)</label>
                                <div class="col-md-6">
                                    <select id="gender" name="gender" class="form-control">
                                        <option value="" disabled @if($student->gender == null) selected @endif>Please select</option>
                                        <option value="1">Male(ชาย)</option>
                                        <option value="2">Female(หญิง)</option>
                                    </select>
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
            $("#race").val({{$student->race}});
            $("#nationality").val({{$student->nationality}});
            $("#gender").val({{$student->gender}});
        });
    </script>
@endsection
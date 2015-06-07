@extends('app')
@section('content')
    <div class="col-md-10">
        @include('components.search')
    </div>
        @if(isset($student))
            <?php
                $nationals = [
                    '0',
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
                $majors = [
                    '0',
                    'SE',
                    'ANI',
                    'MMIT'
                ];
                $degree = [
                  'NULL',
                    'Undergraduate',
                    'Master',
                    'Ph.D'
                ];
                $gender = [
                    'NULL',
                    'Male',
                    'Female'
                ];
                $skills = [
                    'NULL',
                    'ยังค้นไม่พบ',
                    'วิชาการ',
                    'กีฬา',
                    'ดนตรี'
                ];
                $advisers = [
                  'NULL',
                    'จารโตว',
                    'จารโจ้ว'
                ];
            ?>
            <table class="table table-striped">
                <th>
                    <tr>
                        <td>ID</td>
                        <td>Prefix</td>
                        <td>Name</td>
                        <td>Last Name</td>
                        <td>Date of Birth(yyyy/mm/dd)</td>
                        <td>Gender</td>
                        <td>Nationality</td>
                        <td>Race</td>
                        <td>National ID</td>
                        <td>Major</td>
                        <td>Degree</td>
                        <td>Phone number</td>
                        <td>Skill</td>
                        <td>Skill detail</td>
                        <td>Adviser</td>

                    </tr>
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->prefix}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->lastname}}</td>
                        <td>{{$student->DOB}}</td>
                        <td>{{$gender[$student->gender]}}</td>
                        <td>{{$nationals[$student->nationality]}}</td>
                        <td>{{$nationals[$student->race]}}</td>
                        <td>{{$student->identication_no}}</td>
                        <td>{{$majors[$student->major]}}</td>
                        <td>{{$degree[$student->degree]}}</td>
                        <td>{{$student->phone_number}}</td>
                        <td>{{$skills[$student->skill]}}</td>
                        <td>{{$student->skill_detail}}</td>
                        <td>{{$advisers[$student->adviser]}}</td>

                    </tr>
                </th>
            </table>
        @endif

@endsection
<!DOCTYPE html>
<html>
<header>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .body{
            font-family: garuda;
        }
        .description{
            white-space: pre-wrap;
            overflow: hidden;
            display: block;
        }
        .description > span{
            font-weight: bold;
        }
    </style>
</header>
<body>
<h1 lang="th">ข้อมูลของนักศึกษารหัส {{$student->id}}</h1>
<div class="profile" lang="th">
    <div class="description">นักศึกษารหัส :<span>{{$student->id}}</span> </div>
    <div class="description">ชื่อ : <span>{{$student->name}}</span> </div>
    <div class="description">นามสกุล : <span>{{$student->lastname}}</span></div>
</div>
</body>
</html>

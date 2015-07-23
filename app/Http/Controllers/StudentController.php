<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $student = Student::find(Session::get('studentId'));
        if($id == Session::get('studentId')) {
            return view('students.edit')->with('student', $student);
        }
        else{
            return view('students.edit')->with('student', $student)->with('errors',['You\'re trying to access other student data']);
        }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
        $student = Student::find(Session::get('studentId'));
        $validator = Validator::make(
            $request->all(),
            [
                'identication_no'=>'digits:13|required',
                'name' => 'required',
                'lastname' => 'required',
                'race' => 'required',
                'nationality' => 'required',
                'gender' => 'required|integer',
                'prefix' => 'required|alpha',
                'major' => 'required|integer',
                'degree' => 'required|integer',
                'adviser' => 'integer',
                'phone_number' => 'required',
                'skill' =>'integer'
            ]);
        if($validator->fails()){
            return view('students.edit')->with('student',$student)->with('errors',$validator->errors()->all());
        }

        if($id == Session::get('studentId')) {
            $student->identication_no = $request->get('identication_no');
            $student->name = $request->get('name');
            $student->lastname = $request->get('lastname');
            $student->race = $request->get('race');
            $student->nationality = $request->get('nationality');
            $student->DOB = $request->get('DOB');
            $student->gender = $request->get('gender');
            $student->prefix = $request->get('prefix');
            $student->major = $request->get('major');
            $student->degree = $request->get('degree');
            $student->adviser = $request->get('adviser');
            $student->phone_number = $request->get('phone_number');
            $student->skill = $request->get('skill');
            $student->skill_detail = $request->get('skill_detail');
            $student->save();

            $success = 'Student\' information is updated';
            return view('students.edit')->with('student', $student)->with('success',$success);
        }
        else{
            return view('students.edit')->with('student', $student)->with('errors',['You\'re trying to access other student data']);
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
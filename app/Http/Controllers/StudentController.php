<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Session;
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
        if($id == Session::get('studentId')) {
            $student->identication_no = $request->get('identication_no');
            $student->name = $request->get('name');
            $student->lastname = $request->get('lastname');
            $student->race = $request->get('race');
            $student->nationality = $request->get('nationality');
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

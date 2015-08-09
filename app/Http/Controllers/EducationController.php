<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PastEducation;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
        {
            return view('education.index')->with('student',Student::find($id));
        }
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update (Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'college'=>'required',
                'degree'=>'required',
                'major'=>'required',
                'year'=>'required',
                'grade'=>'required'
            ]);
        if($validator->fails()){
            return back()->with('errors',$validator->errors()->all());
        }
        $education = PastEducation::create($request->all());
        $education->student_id = Session::get('studentId');
        $education->save();
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

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\FamilyMember;
use App\Student;

class FamilyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
        return view('family.index')->with('student',Student::find($id));
	}
    public function form($parent,$id)
    {
        return view('family.form')->with('student',Student::find($id))->with('parent',$parent);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
        $student = Student::find(Session::get('studentId'));
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'lastname' => 'required',
                'status'=>'required',
                'identication_no'=>'digits:13|required',
                'degree' => 'required',
                'college'=>'required',
                'job'=>'required',
                'land_owner'=>'required|integer',
                'income_month'=>'required|integer',
                'income_year'=>'required|integer',
                'phone_number' => 'required',
            ]);
        if($validator->fails()){
            return back()->with('errors',$validator->errors()->all());
        }else {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            $familymember = FamilyMember::create($request->all());
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            $familymember->student_id = $student->id;
            if ($request->get('relation') == 'Father') {
                $familymember->relation = 1;
            } else if ($request->get('relation') == 'Mother') {
                $familymember->relation = 2;
            } else {
                $familymember->relation = 3;
            }
            $familymember->save();

            $success = 'Family\' information is updated';
            return view('family.index')->with('student', $student)->with('success',$success);
        }
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

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

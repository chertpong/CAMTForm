<?php namespace App\Http\Controllers;

use App\Address;
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
        $student=Student::find(Session::get('studentId'));
        $dis='disabled';
        if($parent == 'father' && $student->father != 0){
            $familymember=FamilyMember::find($student->father);
            return view('family.form')->with('student',$student)->with('parent',$parent)->with('dis',$dis)->with('familymember',$familymember);
        }elseif($parent == 'mother' && $student->mother != 0){
            $familymember=FamilyMember::find($student->mother);
            return view('family.form')->with('student',$student)->with('parent',$parent)->with('dis',$dis)->with('familymember',$familymember);
        }elseif($parent == 'parent' && $student->parent != 0){
            $familymember=FamilyMember::find($student->parent);
            return view('family.form')->with('student',$student)->with('parent',$parent)->with('dis',$dis)->with('familymember',$familymember);
        }else
        return view('family.form')->with('student',$student)->with('parent',$parent)->with('dis',$dis);
    }
    public function FamilyAddress($parent,$id)
    {
        $student=Student::find(Session::get('studentId'));
        if($parent == 'father' && $student->father != 0){
            $familymember=FamilyMember::find($student->father);
            $address=Address::find($familymember->address);
            return view('address.family')->with('student',$student)->with('parent',$parent)->with('familymember',$familymember)->with('address',$address);
        }elseif($parent == 'mother' && $student->mother != 0){
            $familymember=FamilyMember::find($student->mother);
            $address=Address::find($familymember->address);
            return view('address.family')->with('student',$student)->with('parent',$parent)->with('familymember',$familymember)->with('address',$address);
        }elseif($parent == 'parent' && $student->parent != 0){
            $familymember=FamilyMember::find($student->parent);
            $address=Address::find($familymember->address);
            return view('address.family')->with('student',$student)->with('parent',$parent)->with('familymember',$familymember)->with('address',$address);
        }
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
            if ($request->get('relation') == 'father' && $student->father != 0) {
                $familymember=FamilyMember::find($student->father);
                $familymember->name=$request->get('name');
                $familymember->lastname=$request->get('lastname');
                $familymember->status=$request->get('status');
                $familymember->DOB=$request->get('DOB');
                $familymember->identication_no=$request->get('identication_no');
                $familymember->degree=$request->get('degree');
                $familymember->college=$request->get('college');
                $familymember->job=$request->get('job');
                $familymember->job_detail=$request->get('job_detail');
                $familymember->land_owner=$request->get('land_owner');
                $familymember->income_month=$request->get('income_month');
                $familymember->income_year=$request->get('income_year');
                $familymember->phone_number=$request->get('phone_number');
                $familymember->save();
                $success = 'Family\' information is updated กด "Next>>" เลยครับ';
                $dis='';
                return view('family.form')->with('student', $student)->with('success',$success)->with('parent',$request->get('relation'))->with('dis',$dis)->with('familymember',$familymember);
            }elseif($request->get('relation') == 'mother' && $student->mother != 0){
                $familymember=FamilyMember::find($student->mother);
                $familymember->name=$request->get('name');
                $familymember->lastname=$request->get('lastname');
                $familymember->status=$request->get('status');
                $familymember->DOB=$request->get('DOB');
                $familymember->identication_no=$request->get('identication_no');
                $familymember->degree=$request->get('degree');
                $familymember->college=$request->get('college');
                $familymember->job=$request->get('job');
                $familymember->job_detail=$request->get('job_detail');
                $familymember->land_owner=$request->get('land_owner');
                $familymember->income_month=$request->get('income_month');
                $familymember->income_year=$request->get('income_year');
                $familymember->phone_number=$request->get('phone_number');
                $familymember->save();
                $success = 'Family\' information is updated กด "Next>>" เลยครับ';
                $dis='';
                return view('family.form')->with('student', $student)->with('success',$success)->with('parent',$request->get('relation'))->with('dis',$dis)->with('familymember',$familymember);
            }elseif($request->get('relation') == 'parent' && $student->parent != 0){
                $familymember=FamilyMember::find($student->parent);
                $familymember->name=$request->get('name');
                $familymember->lastname=$request->get('lastname');
                $familymember->status=$request->get('status');
                $familymember->DOB=$request->get('DOB');
                $familymember->identication_no=$request->get('identication_no');
                $familymember->degree=$request->get('degree');
                $familymember->college=$request->get('college');
                $familymember->job=$request->get('job');
                $familymember->job_detail=$request->get('job_detail');
                $familymember->land_owner=$request->get('land_owner');
                $familymember->income_month=$request->get('income_month');
                $familymember->income_year=$request->get('income_year');
                $familymember->phone_number=$request->get('phone_number');
                $familymember->save();
                $success = 'Family\' information is updated กด "Next>>" เลยครับ';
                $dis='';
                return view('family.form')->with('student', $student)->with('success',$success)->with('parent',$request->get('relation'))->with('dis',$dis)->with('familymember',$familymember);
            }else{
                DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                $familymember = FamilyMember::create($request->all());
                DB::statement('SET FOREIGN_KEY_CHECKS=1;');

                if ($request->get('relation') == 'father') {
                    $familymember->relation = 1;$student->father= $familymember->id;$student->save();
                } else if ($request->get('relation') == 'mother') {
                    $familymember->relation = 2;$student->mother= $familymember->id;$student->save();
                } else {
                    $familymember->relation = 3;$student->parent= $familymember->id;$student->save();
                }
                $familymember->save();

                $success = 'Family\' information is created กด "Next>>" เลยครับ';
                $dis='';
                return view('family.form')->with('student', $student)->with('success',$success)->with('parent',$request->get('relation'))->with('dis',$dis)->with('familymember',$familymember);
            }
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

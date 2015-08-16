<?php namespace App\Http\Controllers;

use App\Address;
use App\FamilyMember;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
        $student=Student::find(Session::get('studentId'));
        if($student->address != 0){
            $address=Address::find($student->address);
            return view('address.index')->with('student',Student::find($id))->with('address',$address);
        }
		return view('address.index')->with('student',Student::find($id));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
        $validator = Validator::make(
            $request->all(),
            [
                'number'=>'required',
                'sub_district'=>'required',
                'district'=>'required',
                'province'=>'required',
                'postal'=>'required|integer',
            ]);
        if($validator->fails()){
            return back()->with('errors',$validator->errors()->all());
        }
        Address::create($request->all());


	}
    public function updateForignkeyStudent (Request $request,$id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'number'=>'required',
                'sub_district'=>'required',
                'district'=>'required',
                'province'=>'required',
                'postal'=>'required|integer'
            ]);
        if($validator->fails()){
            return back()->with('errors',$validator->errors()->all());
        }else {
            $student = Student::find(Session::get('studentId'));
            if($student->address != 0){
                $address=Address::find($student->address);
                $address->number=$request->get('number');
                $address->village=$request->get('village');
                $address->street=$request->get('street');
                $address->road=$request->get('road');
                $address->sub_district=$request->get('sub_district');
                $address->district=$request->get('district');
                $address->province=$request->get('province');
                $address->postal=$request->get('postal');
                $address->save();
                $success = 'Student\' information is updated';
                return view('address.index')->with('student', $student)->with('success',$success)->with('address',$address);
            }
            $address = Address::create($request->all());
            $student->address = $address->id;
            $student->save();
            $success = 'Student\' information is updated';
            return view('address.index')->with('student', $student)->with('success',$success)->with('address',$address);
        }
    }
    public function updateForignkeyFamily (Request $request,$parent,$id,$familyId)
    {
        $student = Student::find(Session::get('studentId'));
        $validator = Validator::make(
            $request->all(),
            [
                'number' => 'required',
                'sub_district' => 'required',
                'district' => 'required',
                'province' => 'required',
                'postal' => 'required|integer',
            ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->errors()->all());
        } else {
            $familymember = FamilyMember::find($familyId);
            if($familymember->address != 0){
                $address=Address::find($familymember->address);
                $address->number=$request->get('number');
                $address->village=$request->get('village');
                $address->street=$request->get('street');
                $address->road=$request->get('road');
                $address->sub_district=$request->get('sub_district');
                $address->district=$request->get('district');
                $address->province=$request->get('province');
                $address->postal=$request->get('postal');
                $address->save();
                $success = 'Parent\' information is updated';
                return view('address.family')->with('student', $student)->with('success', $success)->with('address', $address)->with('familymember', $familymember)->with('parent',$parent);
            }else{
            $address = Address::create($request->all());
            $familymember->address = $address->id;
            $familymember->save();
            $success = 'Parent\' information is updated';
            return view('address.family')->with('student', $student)->with('success', $success)->with('address', $address)->with('familymember', $familymember)->with('parent',$parent);
        }}
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
    public function update($id)
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

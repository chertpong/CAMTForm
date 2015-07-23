<?php namespace App\Http\Controllers;

use App\Address;
use App\FamilyMember;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
    public function updateForignkeyStudent (Request $request)
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
        $address = Address::create($request->all());
        Student::find(Session::get('studentId'))->address_id = $address->id;
    }
    public function updateForignkeyFamily (Request $request,$Familyid)
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
        $address = Address::create($request->all());
        FamilyMember::find($Familyid)->address_id = $address->id;
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

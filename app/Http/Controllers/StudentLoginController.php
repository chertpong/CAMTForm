<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentLoginController extends Controller {

	/**
	 * Display a login page
	 *
	 * @return Response
	 */
	public function index()
	{
        if($this->check()){
            return redirect('forms');
        }
        return view('students.login');
	}
    /**
     * Check for credentials via POST
     *
     * @return Response
     */
    public function postLogin(Request $request)
    {
        $validator = Validator::make(
            [
                'id'=>$request->id,
                'password'=>$request->password
            ],
            [
                'id'=>'required|min:9|integer',
                'password'=>'required'
            ],
            [
                'id'=>'Student\'s ID is incorrect, or it must not be null',
                'password'=>'Password is required'
            ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        if(Hash::check($request->input('password'),Student::find($request->input('id'))->password)) {
            Session::put('studentId', $request->input('id'));
            return redirect('forms');
        }
        else{
            return redirect()->back()->with('errors',['ID or Password is incorrect']);
        }
    }

    /**
     *  Logout student
     *
     * @return redirect()
     */
    public function getLogout(){
        Session::flush();
        return redirect('login/students');
    }
    /**
     *  Check if student is logged in
     *
     * @response boolean
     */
    public function check()
    {
        if(Session::has('studentId')){
            return true; //logged in
        }
        else {
            return false;
        }
    }
}

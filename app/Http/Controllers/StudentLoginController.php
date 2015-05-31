<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Student;
use Illuminate\Support\Facades\Hash;
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
        if(Hash::check($request->input('password'),Student::find($request->input('id'))->password)) {
            Session::put('studentId', $request->input('id'));
            return redirect('forms');
        }
        else{
            return redirect()->back()->with('errors','Password or id is not correct');
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

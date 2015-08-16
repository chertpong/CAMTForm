<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Student;
class ReportController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('reports.index');
    }

    public function searchStudentById(Request $request){
        $students = array(Student::find($request->id));
        if($students[0] != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('errors',
                ['Student not found! ID may be invalid or there is no student ID:'.$request->get('id')]);
        }
    }
    public function searchStudentByFirstName(Request $request){
        $students = Student::where('name','LIKE','%'.$request->get('name').'%')->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('errors',
                ['Student not found! name maybe invalid or there is no student name'.$request->get('name')]);
        }
    }
    public function searchStudentByLastName(Request $request){
        $students = Student::where('lastname','LIKE','%'.$request->get('lastname').'%')->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('errors',
                ['Student not found! lastname maybe invalid or there is no student lastname'.$request->get('lastname')]);
        }
    }
    public function searchStudentByFirstNameOrLastName(Request $request){
        $students = Student::where('name','LIKE','%'.$request->get('name').'%')
            ->orWhere('lastname','LIKE','%'.$request->get('lastname').'%')->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! name or lastname maybe invalid or there is no student matched with this query']);
        }
    }
    public function searchStudentByMajor(Request $request){
        $students = Student::where('major','=',$request->get('major'))->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! no student matched with this query']);
        }
    }
    public function searchStudentByDegree(Request $request){
        $students = Student::where('degree','=',$request->get('degree'))->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! no student matched with this query']);
        }
    }
    public function searchStudentByAdviser(Request $request){
        $students = Student::where('adviser','=',$request->get('adviser'))->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! no student matched with this query']);
        }
    }
    public function searchStudentByScholarship(Request $request){
        $students = Student::where('scholarship','=',$request->get('scholarship'))->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! no student matched with this query']);
        }
    }
    public function searchStudentByLoan(Request $request){
        $students = Student::where('student_loan','=',$request->get('student_loan'))->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! no student matched with this query']);
        }
    }
    public function searchStudentByMilitaryDetail(Request $request){
        $students = Student::where('military_detail','=',$request->get('military_detail'))->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! no student matched with this query']);
        }
    }
    public function searchStudentByFatherMotherStatus(Request $request){
        $students = Student::where('father_mother_status','=',$request->get('father_mother_status'))->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! no student matched with this query']);
        }
    }
    public function searchStudentByPhoneNumber(Request $request){
        $students = Student::where('phone_number','LIKE','%'.$request->get('phone_number').'%')->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! no student matched with this query']);
        }
    }
    public function searchStudentBySkill(Request $request){
        $students = Student::where('skill','=',$request->get('skill'))->get();
        if($students != null){
            return view('reports.index')->with('students',$students);
        }
        else{
            return view('reports.index')->with('error',
                ['Student not found! no student matched with this query']);
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
    public function update($id)
    {
        //
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

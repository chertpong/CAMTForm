<?php namespace App\Http\Controllers;

use App\Address;
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
                'prefix' => 'required|alpha',
                'name' => 'required',
                'lastname' => 'required',
                'race' => 'required',
                'nationality' => 'required',
                'military_detail'=>'required',
                'gender' => 'required|integer',
                'major' => 'required|integer',
                'degree' => 'required|integer',
                'adviser' => 'integer',
                'scholarshipid'=>'required|integer',
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
            $student->military_detail=$request->get('military_detail');
            $student->DOB = $request->get('DOB');
            $student->gender = $request->get('gender');
            $student->prefix = $request->get('prefix');
            $student->major = $request->get('major');
            $student->degree = $request->get('degree');
            $student->adviser = $request->get('adviser');
            $student->scholarship=$request->get('scholarship');
            $student->phone_number = $request->get('phone_number');
            $student->father_mother_status = $request->get('father_mother_status');
            $student->skill = $request->get('skill');
            $student->skill_detail = $request->get('skill_detail');
            $student->disease = $request->get('disease');
            $student->treatment = $request->get('treatment');


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
    public function image($id)
    {
        $student = Student::find(Session::get('studentId'));
        if($id == Session::get('studentId')) {
            return view('students.image')->with('student', $student);
        }
        else{
            return view('students.image')->with('student', $student)->with('errors',['You\'re trying to access other student data']);
        }
    }
    public function upload(Request $request, $id)
    {
        $student = Student::find(Session::get('studentId'));
        $v = Validator::make($request->all(), [
            'image' => 'required',
            'house1' => 'required',
            'house2' => 'required'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->with('student',$student)->with('errors',$v->errors()->all());
        }
        else if($id == Session::get('studentId')) {
            
            $student->image=$request->get('image');
            $student->house1=$request->get('house1');
            $student->house2=$request->get('house2');
            $student->save();

            $success = 'Student\' information is updated';
            return view('students.image')->with('student', $student)->with('success',$success);
        }
    }
    public function download($id)
    {
        if(Student::exists($id)){
            $student = Student::find($id);
            $mpdf = new \mPDF('utf-8','A4','','garuda');
            $mpdf->SetHTMLFooter(iconv('TIS-620','UTF-8','
                <table width="100%" style="vertical-align: bottom; font-family: garuda; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>
                <td width="33%"><span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span></td>
                <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
                <td width="33%" style="text-align: right; ">ข้อมูลนักศึกษา CAMT</p></td>
                </tr></table>
            '));
            $mpdf->WriteHTML(view('pdfs.student',compact('student'))->render());
            $mpdf->Output($id.'student.pdf','D');
            return back(200);
            //return \PDF::loadView("pdfs.student",compact('student','title'))->download($id.'student.pdf');
        }
        return new Response('There is no student id:'+$id,200);
    }
}

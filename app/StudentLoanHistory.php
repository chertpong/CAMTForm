<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentLoanHistory extends Model {

    protected $table = 'student_loan_history';
    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\Student');
    }

}

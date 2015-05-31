<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentLoan extends Model {

    protected $table = 'student_loan';
    public $timestamps = false;

    public function student(){
        return $this->hasMany('App\Student');
    }

}

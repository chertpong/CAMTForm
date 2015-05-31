<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    protected $table = 'student';
    public $timestamps = false;

    public function militaryDetail(){
        return $this->hasOne('App\MilitaryDetail');
    }
    public function adviser(){
        return $this->hasOne('App\Adviser');
    }
    public function major(){
        return $this->hasOne('App\Major');
    }
    public function degree(){
        return $this->hasOne('App\Degree');
    }
    public function pastEducation(){
        return $this->hasMany('App\PastEducation');
    }
    public function scholarship(){
        return $this->hasOne('App\Scholarship');
    }
    public function scholarshipHistory(){
        return $this->hasMany('App\ScholarshipHistory');
    }
    public function studentLoan(){
        return $this->hasOne('App\StudentLoan');
    }
    public function studentLoanHistory(){
        return $this->hasMany('App\StudentLoanHistory');
    }
    public function familyMember(){
        return $this->hasMany('App\FamilyMember');
    }
    public function fatherMotherStatus(){
        return $this->hasOne('App\FatherMotherStatus');
    }
    public function address(){
        return $this->hasOne('App\Address');
    }
    public function skill(){
        return $this->hasOne('App\Skill');
    }
}

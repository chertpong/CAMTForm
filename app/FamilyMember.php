<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model {

    protected $fillable = array('student_id','relation','name','lastname','status','DOB','identication_no','degree','college','job','job_detail','land_owner','income_month','income_year','address','phone_number');
    protected $table = 'family_member';
    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\Student');
    }
    public function address(){
        return $this->hasOne('App\Address');
    }
    public function job(){
        return $this->hasOne('App\Job');
    }

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model {

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

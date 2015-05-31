<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    protected $table = 'address';
    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\Student');
    }
    public function familyMember(){
        return $this->hasMany('App\FamilyMember');
    }

}

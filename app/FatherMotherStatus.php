<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FatherMotherStatus extends Model {

    protected $table = 'father_mother_status';
    public $timestamps = false;

    public function student(){
        return $this->hasMany('App\Student');
    }

}

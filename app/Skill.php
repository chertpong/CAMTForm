<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {

    protected $table = 'skill';
    public $timestamps = false;

    public function student(){
        return $this->hasMany('App\Student');
    }

}

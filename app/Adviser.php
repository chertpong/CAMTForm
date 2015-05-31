<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Adviser extends Model {

    protected $table = 'adviser';
    public $timestamps = false;

    public function student(){
        return $this->hasMany('App\Student');
    }

}

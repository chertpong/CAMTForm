<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model {

    protected $table = 'major';
    public $timestamps = false;

    public function student(){
        return $this->hasMany('App\Student');
    }

}

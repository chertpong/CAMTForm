<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model {

    protected $table = 'scholarship';
    public $timestamps = false;

    public function student(){
        return $this->hasMany('App\Student');
    }

}

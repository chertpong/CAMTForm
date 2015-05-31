<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MilitaryDetail extends Model {

    protected $table = 'military_detail';
    public $timestamps = false;

    public function student(){
        return $this->hasMany('App\Student');
    }
}

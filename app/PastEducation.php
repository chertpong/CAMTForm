<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PastEducation extends Model {

    protected $table = 'past_education';
    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\Student');
    }

}

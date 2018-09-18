<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user() {
    	return $this->bolengsTo('App\User');
    }
    protected $fillable = ['avatar','about','facebook','youtube','user_id'];
}

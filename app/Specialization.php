<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $fillable = [ 'name', ];

    public static function seedInsert($name){
    	$specialization = new Specialization;
    	$specialization->name = $name;
    	$specialization->save();
    }
}

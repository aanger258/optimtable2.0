<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [ 'name', 'type'];

    public static function seedInsert($name, $type, $hours){
    	$subject = new Subject;
    	$subject->name = $name;
    	$subject->type = $type;
    	$subject->hours_per_week = $hours;
    	$subject->save();
    }
}

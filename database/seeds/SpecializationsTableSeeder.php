<?php

use App\Specialization;
use Illuminate\Database\Seeder;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$specializations = config('data.specializations.specializations');
    	dd($specializations);
        for($i=0;$i<4;$i++){
        	Specialization::seedInsert($spec[$i]);
        }
    }
}

<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=1; $i++){
        	$subjects = config('data.subjects.subjects.cti.year_' . $i);
        	foreach ($subjects as $subject) {
	        	foreach ($subject as $semester) {
	        		$name = $semester['name'];
	        		$types = explode('_', $semester['type']);
                    $hours = explode('_', $semester['hours']);
	        		for($i=0; $i<count($types);$i++){
	        			Subject::seedInsert($name,$types[$i],$hours[$i]);
	        		}
	        	}
	        }
        }
    }
}

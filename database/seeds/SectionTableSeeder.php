<?php

use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::Table('sections')->delete();
 
         $section_names = ["Breakfast", "Lunch", "Dinner", "Drink"];
         foreach($section_names as $section_name)
         {
         		$section = new App\Section(['name'=> $section_name]);
         		$section->save();
         }
    }
}

<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('foods')->delete();
     		$sections = App\Section::all();
     		$image_names = ["Breakfast.jpg", "Lunch.jpg","Dinner.jpg", "Drink.jpg"];
     		$j=0;
  			foreach($sections as $key => $section)
     		{
     			for($i=0; $i<5; $i++)
 	    		{
 	    			$food = new App\Food(['name'=> $section->name."-".($i+1), 'description' => "Mon an mien tay", 'price' => 20000, 'image_url' =>$image_names[$j], 'section_id'=> $section->id ]);

	    			$section->foods()->save($food);
 	    		}
     		}
    }
}

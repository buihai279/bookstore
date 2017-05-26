<?php

use Illuminate\Database\Seeder;

class SavesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 500; $i++) { 
	        DB::table('saves')->insert(
			         	[
			         		[
					            'book_id' =>  rand(1,200),
					            'user_id' => rand(1,20),
					            'created_at' =>new DateTime(),
								'updated_at' => new DateTime()
					        ]
			         	]
		         	);
    	}
    }
}

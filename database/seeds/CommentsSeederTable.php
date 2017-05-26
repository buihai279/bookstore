<?php

use Illuminate\Database\Seeder;

class CommentsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 2000; $i++) { 
	    	DB::table('comments')->insert(
			         	[
			         		[
					            'book_id' =>  rand(1,800),
					            'user_id' => rand(1,10),
					            'title' => 'Một cuốn sách rất đáng đọc '.$i,
					            'content' => 'Sách hay lắm :)) - comment số '.$i,
					            'rate' => rand(2,5),
					            'created_at' =>new DateTime(),
								'updated_at' => new DateTime()
					        ]
			         	]
		         	);
    	}
    }
}

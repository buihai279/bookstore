<?php


use Illuminate\Database\Seeder;

class OrderDetailsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 1000; $i++) { 
	    	DB::table('order_details')->insert(
			         	[
			         		[
					            'order_id' =>  rand(1,100),
					            'book_id' => rand(1,200),
					            'price' => rand(1,17)*10000,
					            'quality' => rand(1,10),
					        ],
			         	]
		         	); 	
    	}
    }
}

<?php

use Illuminate\Database\Seeder;

class SalesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('sales')->insert(
	         	[
					[
			            'code' => "SALEOFF15",
			            'quality_code' => rand(20,40),
			            'percent' => 10,
			            'max' => 200000,
			            'condition' => ">",
			            'number' => 200000,
			            'content' => 'Giảm giá nhân dịp khai trương',
			            'started' => '2017-12-14',
			            'stopped' => '2017-12-20',
			            'created_at' => new DateTime(),
						'updated_at' => new DateTime()
			        ]
	         	]
         	);
    }
}

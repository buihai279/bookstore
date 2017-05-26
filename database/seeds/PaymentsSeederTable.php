<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class PaymentsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <=100; $i++) { 
        		DB::table('payments')->insert(
		         	[
		         		[
				            'payment_status' =>  'Chưa thanh toán',
				            'payment_type' => 'Thanh toán bằng thẻ ATM',
				            'amount' => 10000,
				            'remember_token' => bcrypt('hihi'.$i),
				            'created_at' =>new DateTime(),
							'updated_at' => new DateTime()
				        ],
		         	]
	         	);
    	}
    }
}
<?php

use Illuminate\Database\Seeder;

class UsersSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert(
	         	[
					[
			            'name' => 'Adminstrator',
			            'email' => 'buihai2603@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>'Từ liêm Hà nội',
			            'level' =>2,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ],
			        [
			            'name' => 'Mod',
			            'email' => 'mod@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>'Từ liêm Hà nội',
			            'level' =>1,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ]
	         	]
         	);
         for ($i=3; $i <= 20; $i++) { 
         	DB::table('users')->insert(
	         	[
					[
			            'name' =>'Người dùng '.$i,
			            'email' => 'member'.$i.'@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>'Địa chỉ nhà số '.$i.' Văn Tiến Dũng, HN',
			            'level' =>0,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ]
	         	]
         	);
         }
    }
}

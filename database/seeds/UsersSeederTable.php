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
			            'name' => str_random(10),
			            'email' => 'buihai2603@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>str_random(10).'hà nội',
			            'level' =>2,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ],
			        [
			            'name' => str_random(10),
			            'email' => 'mod@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>str_random(10).'hà nội',
			            'level' =>1,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ],
			        [
			            'name' => str_random(10),
			            'email' => 'member@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>str_random(10).'hà nội',
			            'level' =>0,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ],
			        [
			            'name' => str_random(10),
			            'email' => 'member1@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>str_random(10).'hà nội',
			            'level' =>0,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ],
			        [
			            'name' => str_random(10),
			            'email' => 'member2@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>str_random(10).'hà nội',
			            'level' =>0,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ]
	         	]
         	);
    }
}

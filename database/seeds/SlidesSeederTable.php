<?php

use Illuminate\Database\Seeder;

class SlidesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('slides')->insert(
                [
                    [
                        'slide_image' => 'hinh-anh/anh-bia/you-can-win_1_1_1.jpg',
                        'link' => '#',
                        'order' => 1,
                        'status' => 1,
                        'created_at' => new DateTime(),
                        'updated_at' => new DateTime()
                    ]
                ]
            );
    }
}

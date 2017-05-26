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

        for ($i=1; $i < 6; $i++) { 
            
         DB::table('slides')->insert(
                [
                    [
                        'slide_image' => '/storage/app/slide-image/'.$i.'.png',
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
}

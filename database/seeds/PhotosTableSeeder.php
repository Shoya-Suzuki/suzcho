<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param =[
        'profile_id'=>'0',
        'pic'=>'storage/upload/noimage.png',
      ];
      DB::table('photos')->insert($param);

    }
}

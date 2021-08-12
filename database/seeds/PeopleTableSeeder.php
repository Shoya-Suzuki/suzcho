<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param =[
          'name'=>'taro',
          'mail'=>'taro@tanaka.com',
          'age'=>'21',
        ];
        DB::table('people')->insert($param);

        $param =[
          'name'=>'hanako',
          'mail'=>'hanako@teshigawa.com',
          'age'=>'20',
        ];
        DB::table('people')->insert($param);

        $param =[
          'name'=>'makoto',
          'mail'=>'makoto@shishio.com',
          'age'=>'25',
        ];
        DB::table('people')->insert($param);

    }
}

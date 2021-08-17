<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param =[
        'name'=>'名前を登録',
        'age'=>'15',
        'star'=>'1',
        'profile'=>'説明を登録',
	'mainphoto'=>'',
      ];
      DB::table('profiles')->insert($param);

       $param =[
        'name'=>'デミタス・ヒトデ',
        'age'=>'21',
        'star'=>'3',
        'profile'=>'期待の超新星',
	'mainphoto'=>'',
      ];
      DB::table('profiles')->insert($param);

      $param =[
        'name'=>'ネェコ・チ・アン',
        'age'=>'19',
        'star'=>'5',
        'profile'=>'電撃哺乳類',
	'mainphoto'=>'',
      ];
      DB::table('profiles')->insert($param);

      $param =[
        'name'=>'ガシランカサノゴ',
        'age'=>'25',
        'star'=>'4',
        'profile'=>'テトラのアイドル',
	'mainphoto'=>'',
      ];
      DB::table('profiles')->insert($param);

      $param =[
        'name'=>'貝塚シャコキチ',
        'age'=>'23',
        'star'=>'3',
        'profile'=>'野生のボクサー',
	'mainphoto'=>'',
      ];
      DB::table('profiles')->insert($param);

      $param =[
        'name'=>'ホリエカメスルー',
        'age'=>'31',
        'star'=>'2',
        'profile'=>'天然異臭騒ぎ',
	'mainphoto'=>'',
      ];
      DB::table('profiles')->insert($param);

      $param =[
        'name'=>'ハッポンテノウチ',
        'age'=>'20',
        'star'=>'5',
        'profile'=>'可食部マックス',
	'mainphoto'=>'',
      ];
      DB::table('profiles')->insert($param);

      $param =[
        'name'=>'フーディーデリシャス',
        'age'=>'26',
        'star'=>'5',
        'profile'=>'カロリー増しまし',
	'mainphoto'=>'',
      ];
      DB::table('profiles')->insert($param);

    }
}

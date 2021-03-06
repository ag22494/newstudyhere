// app/database/seeds/ContentTableSeeder.php

<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{

public function run()
{
    DB::table('contents')->insert([

        'subtopic_code'=>'ETMA-101-1-1',
        'content' => '',
        'source'=>'/maths/1st/topic-1/leibinitz',
        'urlofcloud'=>'',
    ]);
    DB::table('contents')->insert([

        'subtopic_code'=>'ETMA-101-2-1',
        'content'=> '',
        'source'=>'',
        'urlofcloud'=>'',
    ]);
}

}

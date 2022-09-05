<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contents')->insert([
            'user_id' => '1',
            'content' => 'Added using a seeder',
            'divsize' => '12',
            'divheight' => '100'
        ]);
    }
}

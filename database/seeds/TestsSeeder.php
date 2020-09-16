<?php

use Illuminate\Database\Seeder;

class TestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            'title' => 'テスト1',
            'status' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);


        DB::table('tests')->insert([
            'title' => 'テスト2',
            'status' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);





    }
}

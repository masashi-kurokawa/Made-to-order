<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TestResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_results')->insert([
            'user_name' => 'テスト',
            'test_id' => 1,
            'score' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('test_results')->insert([
            'user_name' => 'tarou',
            'test_id' => 2,
            'score' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);






    }
}

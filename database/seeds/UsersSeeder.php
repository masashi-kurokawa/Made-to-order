<?php

use Illuminate\Database\Seeder;

class UersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'テスト',
            'email' => 'test@test.com',
            'email_verified_at'=> new DateTime(),
            'password' => Hash::make('kjikboRERTFKU98hg'),
            'remember_token' => '???',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);


        DB::table('users')->insert([
            'name' => 'tarou',
            'email' => 'test@tarou.com',
            'email_verified_at'=> new DateTime(),
            'password' => 'test',
            'remember_token' => '??????????',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);





    }
}

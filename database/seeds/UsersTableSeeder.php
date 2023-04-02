<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'over_name' => '田中',
            'under_name' => '勇気',
            'over_name_kana' => 'タナカ',
            'under_name_kana' => 'ユウキ',
            'mail_address' => 'test2@test.com',
            'sex' => '1',
            'birth_day' => '1998/12/29',
            'role' => '4',
            'password' => bcrypt('test12345'),
        ]);
    }
}

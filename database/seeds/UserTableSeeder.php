<?php

use Illuminate\Database\Seeder;
use App\Model\Users;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        Users::create([
            'number' => '111',
            'password' => Hash::make('111')
        ]);

        Users::create([
            'number' => '222',
            'password' => Hash::make('222')
        ]);
        Users::create([
            'number' => '333',
            'password' => Hash::make('333')
        ]);
    }
}

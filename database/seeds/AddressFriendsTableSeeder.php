<?php

use Illuminate\Database\Seeder;

class AddressFriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AddressFriend::class, 100)->create();
    }
}

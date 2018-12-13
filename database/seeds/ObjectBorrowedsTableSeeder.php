<?php

use Illuminate\Database\Seeder;

class ObjectBorrowedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ObjectBorrowed::class, 100)->create();
    }
}

<?php

use App\Shop;
use App\Subscriber;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        factory(Subscriber::class, 10)->create();
        factory(Shop::class, 10)->create();
    }
}

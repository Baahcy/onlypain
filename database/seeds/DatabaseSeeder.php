<?php

use App\Music;
use App\Shop;
use App\Subscriber;
use App\Video;
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

        factory(Subscriber::class, 2)->create();
        factory(Shop::class, 10)->create();
        factory(Music::class, 10)->create();
        factory(Video::class, 2)->create();

    }
}

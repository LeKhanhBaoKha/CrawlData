<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //lưu ý thứ tự khi có khóa ngoại
        $this->call([
            categorySeeder::class,
            ProductSeeder::class
        ]);
    }
}

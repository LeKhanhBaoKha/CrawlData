<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::where('name','Beverage')->first()->products()->createMany([
            [
                'name'=>'Sản phẩm 1',
                'price'=>1000000,
                'image'=>'img/rainWorld.jpg',
                'description'=>'good'
            ],
            [
                'name'=>'Sản phẩm 2',
                'price'=>1000000,
                'image'=>'img/ShortHike.jpg',
                'description'=>'good'
            ],
            [
                'name'=>'Sản phẩm 3',
                'price'=>1000000,
                'image'=>'img/SonsOfValhalla.jpg`',
                'description'=>'good'
            ],
        ]);
    }
}

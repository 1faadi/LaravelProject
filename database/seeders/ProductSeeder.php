<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prod = new Product();
        $prod->title = 'iPhone';
        $prod->desc = 'iPhone';
        $prod->image = 'images/newimage.png';
        $prod->price = 200;
        $prod->save();

        $prod = new Product();
        $prod->title = 'iPhone1';
        $prod->desc = 'iPhone';
        $prod->image = 'images/newimage.png';
        $prod->price = 233;
        $prod->save();

        $prod = new Product();
        $prod->title = 'iPhone2';
        $prod->desc = 'iPhone';
        $prod->image = 'images/newimage.png';
        $prod->price = 233;
        $prod->save();

        $prod = new Product();
        $prod->title = 'iPhone3';
        $prod->desc = 'iPhone';
        $prod->image = 'images/newimage.png';
        $prod->price = 4343;
        $prod->save();


    }
}

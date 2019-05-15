<?php

use Illuminate\Database\Seeder;
use App\OpeningDates;
use App\Product;
use App\Type;
use App\Size;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dates = new OpeningDates();
        $dates->start = '2019-04-01';
        $dates->end = '2019-06-01';
        $dates->save();

        /////////////////////////////////

        $product = new Product();
        $product->title = 'Vest';
        $product->description = 'Hoody met rits, voor stafleden en explorers. Logo voor en handjes achter op de rug.';
        $product->price = 29.00;
        $product->leiding = true;
        $product->image = 'img/hoody.png';
        $product->save();

        $type = new Type();
        $type->product_id = $product->id;
        $type->title = "Unisex";
        $type->description = "Basic Hoody full zip grijs(!)";
        $type->save();

        $size = new Size();
        $size->type_id = $type->id;
        $size->title = "S";
        $size->save();

        $size = new Size();
        $size->type_id = $type->id;
        $size->title = "M";
        $size->save();

        $type = new Type();
        $type->product_id = $product->id;
        $type->title = "Dames";
        $type->description = "Basic Hoody full zip Ladies grijs(!)";
        $type->save();

        $size = new Size();
        $size->type_id = $type->id;
        $size->title = "XL";
        $size->save();

        $size = new Size();
        $size->type_id = $type->id;
        $size->title = "XXL";
        $size->save();

        /////////////////////////////////

        $product = new Product();
        $product->title = 'Polo';
        $product->price = 22.00;
        $product->leiding = true;
        $product->image = 'img/polo.png';
        $product->save();

        /////////////////////////////////

        $product = new Product();
        $product->title = 'T-shirt jeugdleden';
        $product->description = 'T-shirt van goede kwaliteit. Alleen een logo voor op de borst. Als aanvulling op het uniform, mag niet in plaats van de blouse gedragen worden.';
        $product->price = 7.50;
        $product->leiding = false;
        $product->image = 'img/jeugd.jpg';
        $product->save();


    }
}

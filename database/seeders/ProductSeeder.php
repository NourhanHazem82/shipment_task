<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Product::count() == 0) {
			Product::create(
                [
                    'product_name' => 'Dish Washer',
                    'price'        => 15600,
                    'category_id'  => 4,
                ],            
        );
			Product::create(
                [
                    'product_name' => 'Fridge LG',
                    'price'        => 65000,
                    'category_id'  => 2,
                ],            
        );
			Product::create(
                [
                    'product_name' => 'Mobile nokia',
                    'price'        => 7200,
                    'category_id'  => 1,
                ],            
        );
			Product::create(
                [
                    'product_name' => 'Freezer',
                    'price'        => 17000,
                    'category_id'  => 3,
                ],            
        );
			Product::create(
                [
                    'product_name' => 'Microwave',
                    'price'        => 8400,
                    'category_id'  => 1,
                ],            
        );
			Product::create(
                [
                    'product_name' => 'Fridge Samsung',
                    'price'        => 69000,
                    'category_id'  => 2,
                ],            
        );
			Product::create(
                [
                    'product_name' => 'Clothes Washer',
                    'price'        => 9400,
                    'category_id'  => 4,
                ],            
        );
			Product::create(
                [
                    'product_name' => 'Smart hand watch',
                    'price'        => 400,
                    'category_id'  => 1,
                ],            
        );
		}
    }
}

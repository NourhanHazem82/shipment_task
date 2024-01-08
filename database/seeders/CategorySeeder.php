<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (Category::count() == 0) {
			Category::create(
                [
                    'categoryt_name' => 'Electronics',
                ],            
        );
			Category::create(
                [
                    'categoryt_name' => 'Fridges',
                ],            
        );
			Category::create(
                [
                    'categoryt_name' => 'Deep freezer',
                ],            
        );
			Category::create(
                [
                    'categoryt_name' => 'Washing machines
',
                ],            
        );

        
		}
    }
}

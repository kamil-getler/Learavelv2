<?php

namespace Database\Seeders;

use Database\Seeders\ProductCategory;
use Illuminate\Database\Seeder;



class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run()
    {
        $data = [
            ['name' => 'Odzież'],
            ['name' => 'Akcesoria']
        ];
        \App\Models\ProductCategory::insert($data);
    }

}

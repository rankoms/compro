<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DataProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_nama = [
            [
                'name' => 'Primary Effect Non-Woven Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'Paper Frame, Galvanized Frame Primary Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'Medium-Efficiency Bag Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'High Efficiency HEPA Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'Ceiling Filter For Paint Spray Booth',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'Paper Frame, Galvanized Frame Primary Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'Medium-Efficiency Bag Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'High Efficiency HEPA Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'Primary Effect Non-Woven Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'Primary Effect Non-Woven Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ],
            [
                'name' => 'Primary Effect Non-Woven Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_1.png'
            ]
        ];

        foreach ($arr_nama as $key => $value) :
            $product = new Product();
            $product->name = $value['name'];
            $product->type = strtolower(str_replace(" ", "-", $value['name']));
            $product->category = $value['category'];
            $product->images = $value['images'];
            $product->save();
        endforeach;
    }
}

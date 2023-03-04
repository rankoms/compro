<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DataCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_category = [
            [
                'name' => 'Gas Filtration Series',
                'description' => 'Gas filtering refers to the separating of particles from a gas - e.g. from air, or removing particulate pollution from a gaseous waste.',
                'images' => 'product_category_1_img.svg'
            ],
            [
                'name' => 'Liquid Filtration Series',
                'description' => 'Gas filtering refers to the separating of particles from a gas - e.g. from air, or removing particulate pollution from a gaseous waste.',
                'images' => 'product_category_2_img.svg'
            ],
            [
                'name' => 'Other Filter Series',
                'description' => 'Gas filtering refers to the separating of particles from a gas - e.g. from air, or removing particulate pollution from a gaseous waste.',
                'images' => 'product_category_3_img.svg'
            ],
            [
                'name' => 'Recommended Product',
                'description' => 'Gas filtering refers to the separating of particles from a gas - e.g. from air, or removing particulate pollution from a gaseous waste.',
                'images' => 'product_category_4_img.svg'
            ],
        ];

        foreach ($arr_category as $key => $value) :
            $category = new Category();
            $category->name = $value['name'];
            $category->type = strtolower(str_replace(" ", "-", $value['name']));
            $category->description = $value['description'];
            $category->images = $value['images'];
            $category->save();
        endforeach;
    }
}

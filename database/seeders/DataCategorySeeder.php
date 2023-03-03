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
                'type' => 'gas-filtration-series',
                'description' => 'Gas filtering refers to the separating of particles from a gas - e.g. from air, or removing particulate pollution from a gaseous waste.',
                'images' => 'images_1.png'
            ],
        ];

        foreach ($arr_category as $key => $value) :
            $category = new Category();
            $category->name = $value['name'];
            $category->type = $value['type'];
            $category->description = $value['description'];
            $category->images = $value['images'];
            $category->save();
        endforeach;
    }
}

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
                'images' => 'images_1.png',
                'description' => '<div>Synthetic fiber filter "SyntheticFiber, commonly known as non-woven filter, non-woven filter, the filter material is made of chemical synthetic fibers, such as polyester (Polyester, Polyamine Polyami-de)... The fibrous web made by the flexible needle method makes thick and thin fibers overlap and synthesize. Depending on the diameter and density of the fiber, the efficiency of filtering different dust is formed to achieve high dust collection.</div>',
                'detail' => "



                <h2>
                    Characteristic
                </h2>
                <hr/>
                
                <div>
                
                    Filter material: It has the characteristics of high air permeability and low pressure loss.
                    Outer frame: paper frame, galvanized iron frame, aluminum frame or stainless steel frame can be selected as the frame material, and the size can be customized.
                    
                    Specifications: This filter has different sizes, styles, and thicknesses. It can be cut into various sizes according to customer needs.
                </div>
                
                
                <h2>Use</h2>
                <hr/>
                <div>
                
                    It is used for general outside air intake. Such as: for the initial (coarse) filtration of air conditioning in buildings, paintings, factories, etc.
                    
                    Suitable for various industrial purposes. Such as: industrial waste gas, processing dust collection, initial (coarse) filtration of sewage.
                </div>
                <div>
                <h2> Product specifications</h2>
                <hr/>
                <img src='" . asset("storage/detail/product_1.png") . "' alt='Product 1'>
                </br>
                </br>
                </br>
                <div>

                Standard size
                Width: 0.5M, 0.6M, 1M, 1.2M, 1.5M, 1.8M, 2M
                Length: 20M, 30M, 50M
                Note: In case of special size, the
                pressure difference can be customized according to the needs of the customer. Unit conversion: 1mmAQ=9.81Pa
            </div>
            </div>",
            ],
            [

                'name' => 'Paper Frame, Galvanized Frame Primary Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_2.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'Medium-Efficiency Bag Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_3.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'High Efficiency HEPA Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_4.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'Ceiling Filter For Paint Spray Booth',
                'category' => 'Gas Filtration Series',
                'images' => 'images_5.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'Auto-Roll Type Air In-Take Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_6.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'Fiberglass Exhaust Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_7.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'Coconut Fiber Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_8.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'Plastic Brown Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_9.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'KR-80 High Temperature Resistant Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_10.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'HT-300 High Temperature Resistant Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_11.png',
                'description' => '',
                'detail' => '',
            ],
            [

                'name' => 'RF200 High Temperature Resistant Synthetic Fiber Filter',
                'category' => 'Gas Filtration Series',
                'images' => 'images_12.png',
                'description' => '',
                'detail' => '',
            ],


            [
                'name' => 'Filter Cartridge',
                'category' => 'Liquid Filtration Series',
                'images' => 'images_2_1.jpg',
                'description' => '',
                'detail' => '',
            ],
            [
                'name' => 'Liquid filter bag',
                'category' => 'Liquid Filtration Series',
                'images' => 'images_2_2.jpg',
                'description' => '',
                'detail' => '',
            ],
            [
                'name' => 'Anode Bags for Plating',
                'category' => 'Liquid Filtration Series',
                'images' => 'images_2_3.jpg',
                'description' => '',
                'detail' => '',
            ],
            [
                'name' => 'Housing Filter',
                'category' => 'Liquid Filtration Series',
                'images' => 'images_2_4.jpg',
                'description' => '',
                'detail' => '',
            ],

            [
                'name' => 'Custom-Made For Various Type Of Holding Frame',
                'category' => 'Other Filter Series',
                'images' => 'images_3_1.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Metal mesh',
                'category' => 'Other Filter Series',
                'images' => 'images_3_2.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Stainless steel filter',
                'category' => 'Other Filter Series',
                'images' => 'images_3_3.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Filter (heart)',
                'category' => 'Other Filter Series',
                'images' => 'images_3_4.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Dust Collector / Dust Filter Bag',
                'category' => 'Other Filter Series',
                'images' => 'images_3_5.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Various Type Of Dust Collector Filter',
                'category' => 'Other Filter Series',
                'images' => 'images_3_6.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Filter Cloth For Dehydration Equipment of Waste Sludge',
                'category' => 'Other Filter Series',
                'images' => 'images_3_7.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Filter paper',
                'category' => 'Other Filter Series',
                'images' => 'images_3_8.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'STICKY WIPER',
                'category' => 'Other Filter Series',
                'images' => 'images_3_9.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Dust-free wipes',
                'category' => 'Other Filter Series',
                'images' => 'images_3_10.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Tacky Dust Agent',
                'category' => 'Other Filter Series',
                'images' => 'images_3_11.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Activated carbon chemical filter',
                'category' => 'Other Filter Series',
                'images' => 'images_3_12.jpg',
                'description' => '',
                'detail' => '',

            ],
            [
                'name' => 'Accessories of Clean Room',
                'category' => 'Other Filter Series',
                'images' => 'images_3_13.jpg',
                'description' => '',
                'detail' => '',

            ]


        ];

        foreach ($arr_nama as $key => $value) :
            $product = new Product();
            $product->name = $value['name'];
            $product->type = strtolower(str_replace(" ", "-", $value['name']));
            $product->category = $value['category'];
            $product->images = $value['images'];
            $product->description = $value['description'];
            $product->detail = $value['detail'];
            $product->save();
        endforeach;
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lists = [[
            'brand_name' => '韩专',
            'brand_desc' => ''
        ], [
            'brand_name' => '波斯猫',
            'brand_desc' => ''
        ], [
            'brand_name' => '优乐柔',
            'brand_desc' => ''
        ], [
            'brand_name' => '云南白药',
            'brand_desc' => ''
        ]];
        foreach ($lists as $list) {
            Brand::create($list);
        }
    }
}

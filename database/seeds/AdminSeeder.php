<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
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
            'name' => 'admin',
            'email' => 'admin@qq.com',
            'password' => \Hash::make('111111')
        ]];
        foreach ($lists as $list) {
            Admin::create($list);
        }
    }
}

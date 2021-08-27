<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 1
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'iphone11',
            'price'=>'1000',
            'category'=>'Smartphones',
            'description'=>'white in color 16gb ram 8gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1575695342320-d2d2d2f9b73f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80'
            ],
            [
            'name'=>'Nokia',
            'price'=>'5000',
            'category'=>'Smartphones',
            'description'=>'white in color 2gb ram 8gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80'
            ],
            [
            'name'=>'Ulefone',
            'price'=>'6000',
            'category'=>'Smartphones',
            'description'=>'white in color 4gb ram 32gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1585060544812-6b45742d762f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=759&q=80'
            ],
            [
            'name'=>'Huawei',
            'price'=>'8000',
            'category'=>'Smartphones',
            'description'=>'white in color 3gb ram 16gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1595941069915-4ebc5197c14a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80'
            ],
            [
            'name'=>'Old Tv',
            'price'=>'8000',
            'category'=>'television',
            'description'=>'white in color 16gb ram 8gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1467293622093-9f15c96be70f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
            ],
            [
            'name'=>'Android tv',
            'price'=>'50000',
            'category'=>'television',
            'description'=>'white in color 16gb ram 8gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1461151304267-38535e780c79?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=890&q=80'
            ],
            [
            'name'=>'Skylink tv',
            'price'=>'20000',
            'category'=>'television',
            'description'=>'white in color 16gb ram 8gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1495563125611-fa99f0cd529f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80'
            ],
            [
            'name'=>'Samsung tv',
            'price'=>'30000',
            'category'=>'television',
            'description'=>'white in color 16gb ram 8gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
            ],
            [
            'name'=>'Lenovo',
            'price'=>'20000',
            'category'=>'Laptop',
            'description'=>'grey in color 4gb ram 250gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
            ],
            [
            'name'=>'Hp',
            'price'=>'25000',
            'category'=>'Laptop',
            'description'=>'blue in color 8gb ram 500gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=r1b-1.2.1&auto=format&fit=crop&w=1502&q=80'
            ],
            [
            'name'=>'Dell',
            'price'=>'30000',
            'category'=>'Laptop',
            'description'=>'black in color 4gb ram 750gb rom',
            'gallery'=>'https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80'
            ]
       
        ]);
    }
}

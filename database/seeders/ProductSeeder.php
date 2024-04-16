<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Product::factory()->count(200)->create();
        $stateFile =  realpath(  app_path(). '/../sqltable/products.sql' );
        if (file_exists($stateFile))
        {
            $content = str_replace("\u{FEFF}", '', file_get_contents($stateFile));
            DB::unprepared($content);
        }
        else{
            echo "No Found";
        }

    }
}

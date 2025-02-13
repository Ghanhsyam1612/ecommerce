<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Category::factory(100)->create();
        $stateFile =  realpath(  app_path(). '/../sqltable/categories.sql' );
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

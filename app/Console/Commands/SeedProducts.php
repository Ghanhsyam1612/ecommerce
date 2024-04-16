<?php

namespace App\Console\Commands;

use App\Helpers\products;
use Illuminate\Console\Command;

class SeedProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seed-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $productHelper = new products();

        $filePath =  realpath(  app_path(). '/../sqltable/products.csv' );

        $productHelper->readCsv($filePath);
    }
}

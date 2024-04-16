<?php
namespace App\Helpers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Support\Collection;


class products
{
        public function readCsv(string $filePath)
        {

            $handle = fopen($filePath ,'r');
            $data = [];
            fgetcsv($handle, 100000, ",");

            while (! feof($handle)) {
                    $row = fgetcsv($handle, 100000, ",");
                    if($row != null){
                            $productDetail = [
                                'id' =>  $row[0],
                                'category_id' => $row[1],
                                'product_brand' => $row[2],
                                'product_name' => $row[3],
                                'price' => intval( $row[4] ),
                                'description' => $row[5],
                                'image' => $row[6]
                            ];

                            Product::firstOrCreate($productDetail);

                    }
            }


        }
}

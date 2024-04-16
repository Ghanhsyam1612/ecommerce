<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends ApiController
{
    public function allProducts(Request $request)
    {
        $query = Product::query();

        if($request->has('price')){
            $query->where('price' ,'=' , $request->price);
        }

        $products = $query->paginate(10);

        return ProductResource::collection($products);
    }


    public function singleProduct(Product $product)
    {
        return  new ProductResource($product);

    }

    public function productWithReview(Product $product)
    {
        return Product::with('reviews')->find($product->id);
    }

}

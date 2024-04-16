<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryApiController extends ApiController
{
    public function categories()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }

    public function categoryWithProduct(Category $category)
    {
        $products = $category->products()->paginate(10);
        return ProductResource::collection($products);
    }
}

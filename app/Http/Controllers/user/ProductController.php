<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Service\Product\ProductService;
use Illuminate\Http\Request;
use PDO;

class ProductController extends Controller
{

    protected $productService;

    public function __construct(ProductService $__productService)
    {
        $this->productService = $__productService;
    }

    public function shop(){
        $products = $this->productService->getAllProducts();
        return view('user.pages.product', ['products' => $products]);
    }

    public function detail($id){
        $product = $this->productService->getProduct($id);
        $images = $this->productService->getProductImages($id);
        return view('user.pages.detail', ['product' => $product, 'images' => $images]);
    }

    public function cart(){
        $images = $this->productService->getProductImage(2);
        return response()->json($images);
    }
}

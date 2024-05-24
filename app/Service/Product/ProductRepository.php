<?php 

namespace App\Service\Product;

use App\Models\InnerProduct;
use App\Models\Product;

class ProductRepository implements ProductService{

  public function getAllProducts(){
    return Product::all();
  }

  public function getProduct($id){
    return Product::find($id);
  }

  public function getProductImages($id){
    return Product::find($id)->images()->get();
  }

  public function getProductImage($id){
    return Product::find($id)->images()->first();
  }

  public function getInnerProduct($id){
    return Product::find($id)->innerProducts()->get();
  }

  public function searchProduct($product){
    return Product::where('name', "%$product%")->get();
  }

}

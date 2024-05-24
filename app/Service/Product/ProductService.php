<?php 

namespace App\Service\Product;

interface ProductService {

  public function getAllProducts();

  public function getProduct($id);

  public function getProductImages($id);
  
  public function getProductImage($id);

  public function getInnerProduct($id);

  public function searchProduct($product);

}

<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    public function Index(RouteCollection $routes)
    {
        $products = new Product();
        $products = $products->SelectAll();

        require_once APP_ROOT . '/views/products.php';
    }

    // Show the product attributes based on the id.
	public function FindByID(int $id, RouteCollection $routes)
	{
        $product = new Product();
        $product = $product->read($id);

        require_once APP_ROOT . '/views/product.php';
	} 


}
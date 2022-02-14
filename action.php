<?php

require_once "vendor/autoload.php";

use App\classes\Home;
use App\classes\Category;
use App\classes\Products;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'all-product')
    {
        $category = new Category();
        $categories = $category->category();
        $product = new Products();
        $products = $product->index();
        include "pages/all-product.php";
    } elseif ($_GET['pages'] == 'category-products')
    {
        $category = new Category();
        $categories = $category->category();
        $product  = new Products();
        $products = $product->shortProducts($_GET['category_id']);
        include "pages/all-product.php";
    } elseif ($_GET['pages'] == 'product-details')
    {
        $category = new Category();
        $categories = $category->category();
        $product = new Products();
        $productDetails = $product->getProductDetails($_GET['product_id']);
       include 'pages/productDetails.php';
    }

}


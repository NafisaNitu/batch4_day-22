<?php


namespace App\classes;


class Products
{
    protected $allProducts;
    protected $result = [];

    public function index(){
        return [
            0=> [
                'id' => 1,
                'category_id' =>1,
                'name' => 'Black T-shirt',
                'price' => 5000,
                'description' => 'product description',
                'image' => 'assets/img/p1.jpg'
            ],
            1=> [
                'id' => 2,
                'category_id' =>1,
                'name' => 'White T-shirt',
                'price' => 6000,
                'description' => 'product description',
                'image' => 'assets/img/p11.png'
            ],
            2=> [
                'id' => 3,
                'category_id' =>2,
                'name' => 'Red Saree',
                'price' => 8000,
                'description' => 'product description',
                'image' => 'assets/img/2.jpg'
            ],
            3=> [
                'id' => 4,
                'category_id' =>2,
                'name' => 'Black Saree',
                'price' => 4000,
                'description' => 'product description',
                'image' => 'assets/img/1.jpg'
            ],
            4=> [
                'id' => 5,
                'category_id' =>3,
                'name' => 'Kids Black T-shirt',
                'price' => 5500,
                'description' => 'product description',
                'image' => 'assets/img/p9.jpg'
            ],
            5=> [
                'id' => 6,
                'category_id' =>3,
                'name' => 'Kids White T-shirt',
                'price' => 3000,
                'description' => 'product description',
                'image' => 'assets/img/p10.jpg'
            ]
        ];
    }

    public function shortProducts($categoryId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['category_id'] == $categoryId)
            {
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }

    public function getProductDetails($productId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['id'] == $productId)
            {
                return $product;
            }
        }
    }
}
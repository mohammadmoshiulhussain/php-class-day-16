<?php
namespace App\classes;
class Product
{
    protected $products;

    public function getAllProduct()
    {
        return [
            0 => [
                'name'        => 'Red Mug',
                'price'       => '100',
                'brand'       => 'Ceramics',
                'category'    => 'Mug',
                'description' => 'We exist to provide support for every child, adult',
                'image'       => 'a4.jpg'
            ],
            1 => [
                'name'        => 'White Shirt',
                'price'       => '300',
                'brand'       => 'Freeland',
                'category'    => 'Shirt',
                'description' => 'We exist to provide support for every child, adult',
                'image'       => 'a5.jpg'
            ],
            2 => [
                'name'        => 'Black Mask',
                'price'       => '200',
                'brand'       => 'Polo',
                'description' => 'We exist to provide support for every child, adult',
                'image'       => 'a6.jpg'
            ],
        ];
    }
}
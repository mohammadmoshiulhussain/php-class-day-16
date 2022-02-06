<?php
namespace App\classes;
class Blog
{
    protected $blogs;

    public function getAllBlog()
    {
        return [
            0 => [
                'title'       => 'A New Blog',
                'description' => 'Blog Description',
                'author'      => 'Moshiul',
                'image'       => 'a1.jpg'
            ],
            1 => [
                'title'       => 'A New Blog',
                'description' => 'Blog Description',
                'author'      => 'Moshiul',
                'image'       => 'a2.jpg'
            ],
            2 => [
                'title'       => 'A New Blog',
                'description' => 'Blog Description',
                'author'      => 'Moshiul',
                'image'       => 'a3.jpg'
            ],
        ];
    }
}
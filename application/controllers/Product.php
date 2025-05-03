<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['title'] = 'Our Products - TukangRoti.com';
        $data['description'] = 'Beragam produk bakery lezat dari TukangRoti.com';
        $data['products'] = [
            [
                'id' => 1,
                'name' => 'Coffee Bun',
                'description' => 'Roti dengan topping buttery coffee yang renyah di luar dan lembut di dalam',
                'image' => 'coffee_bun.jpg',
                'is_bestseller' => true
            ],
            [
                'id' => 2,
                'name' => 'Cheese Bun',
                'description' => 'Roti lembut dengan isian keju premium yang creamy',
                'image' => 'cheese_bun.jpg',
                'is_bestseller' => false
            ],
            [
                'id' => 3,
                'name' => 'Chocolate Croissant',
                'description' => 'Croissant berlapis dengan isian coklat berkualitas tinggi',
                'image' => 'choco_croissant.jpg',
                'is_bestseller' => true
            ],
            [
                'id' => 4,
                'name' => 'Cinnamon Roll',
                'description' => 'Roti gulung kayu manis dengan cream cheese frosting',
                'image' => 'cinnamon_roll.jpg',
                'is_bestseller' => false
            ]
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');
    }
}
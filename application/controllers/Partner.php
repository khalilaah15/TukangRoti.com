<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['title'] = 'Partner with Us - TukangRoti.com';
        $data['description'] = 'Bergabunglah dengan kami dan menjadi mitra bisnis TukangRoti.com';
        
        $this->load->view('templates/header', $data);
        $this->load->view('partner/index', $data);
        $this->load->view('templates/footer');
    }
}
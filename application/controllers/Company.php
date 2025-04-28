<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['title'] = 'About Our Company - TukangRoti.com';
        $data['description'] = 'Temukan pencapaian dan perjalanan bisnis TukangRoti.com';
        
        $this->load->view('templates/header', $data);
        $this->load->view('company/index', $data);
        $this->load->view('templates/footer');
    }
}
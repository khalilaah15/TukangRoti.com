<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['title'] = 'TukangRoti.com - Home';
        $data['description'] = 'Perusahaan bakery terkemuka dengan spesialisasi Coffee Bun';
        
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
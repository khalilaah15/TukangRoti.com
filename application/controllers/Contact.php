<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property Partner_model $Partner_model
 */
class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Partner_model');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }

    public function submit() {
        $data = [
            'name' => $this->input->post('name', TRUE),
            'email' => $this->input->post('email', TRUE),
            'phone' => $this->input->post('phone', TRUE),
            'address' => $this->input->post('address', TRUE),
            'city' => $this->input->post('city', TRUE),
            'message' => $this->input->post('message', TRUE),
        ];
        $this->Partner_model->insert_partner($data);
        redirect('contact/index'); 
    }

    public function list() {
        $data['partners'] = $this->Partner_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('contact/list', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id) {
        $partner = $this->Partner_model->get_by_id($id);
    
        if ($partner) {
            $data['partner'] = $partner;
            $this->load->view('templates/header');
            $this->load->view('contact/edit', $data);
            $this->load->view('templates/footer');
        } else {
            show_404();
        }
    }
    
    public function update($id) {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'message' => $this->input->post('message')
        ];

        $result = $this->Partner_model->update_partner($id, $data);

        if ($result) {
            redirect('contact/list');
        } else {
        }
    }

    public function delete($id) {
        $this->Partner_model->delete_partner($id);
        redirect('contact/list');
    }
}

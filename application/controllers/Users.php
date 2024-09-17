<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $data['users'] = $this->User_model->get_all_users();
        $this->load->view('users/index', $data);
    }

    public function create() {
        $this->load->view('users/create');
    }

    public function store() {
        $this->User_model->insert_user();
        redirect('users');
    }

    public function edit($id) {
        $data['user'] = $this->User_model->get_user($id);
        $this->load->view('users/edit', $data);
    }

    public function update($id) {
        $this->User_model->update_user($id);
        redirect('users');
    }

    public function delete($id) {
        $this->User_model->delete_user($id);
        redirect('users');
    }
}

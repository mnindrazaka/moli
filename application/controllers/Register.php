<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    // Show register form
    public function index() {
        $this->redirectIfAuthenticated('user');
        $this->view('register.index');
    }

    // Register process
    public function registerProcess() {
        $this->redirectIfAuthenticated('user');
        $this->validate($this->input->post(), [
            'nama' => 'required|string',
            'email' => 'required|email|unique:pengguna',
            'password' => 'required|string|min:6|confirmed'
        ]);
        $_POST['password'] = md5($_POST['password']);
        $_POST['latitude'] = -7.95873;
        $_POST['longitude'] = 112.638;

        $user = PenggunaModel::create($this->input->post());
        $this->session->set_userdata('user', $user);
        redirect(base_url());
    }
}

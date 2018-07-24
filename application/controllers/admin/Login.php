<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function index() {
        $this->redirectIfAuthenticated('admin', 'admin/beranda');
        $this->view('admin.login.index');
    }

    public function login_process() {
        $this->redirectIfAuthenticated('admin', 'admin/beranda');

        $this->validate($this->input->post(), [
            'username' => 'required|string|exists:admin',
            'password' => 'required|string'
        ]);

        $admin = AdminModel::with('level.akses.modul')->where([
            'username' => $this->input->post('username')
        ])->first();

        if ($admin->password == md5($this->input->post('password'))) {
            $this->session->set_userdata('admin', $admin);
            redirect(base_url('admin'));
        } else {
            $validation = $this->validator->make([], []);
            $validation->errors()->add('password', 'the password is invalid');
            $this->session->set_flashdata('errors', $validation->errors());
            $this->session->set_flashdata('old', $this->input->post());
            redirect(base_url('admin/login'));
        }
    }

    public function logout_process() {
        unset($_SESSION['admin']);
        redirect(base_url('admin/login'));
    }
}

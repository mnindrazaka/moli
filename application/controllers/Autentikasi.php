<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends MY_Controller {

    public function login() {
        $this->redirectIfAuthenticated();
        $this->view('autentikasi.login');
	}

    public function register() {
        $this->redirectIfAuthenticated();
        $this->view('autentikasi.register');
    }

    public function dologin() {
        $this->redirectIfAuthenticated();
        $this->validate($this->input->post(), [
            'email' => 'required|email|exists:pengguna',
            'password' => 'required|string|min:6'
        ]);

        $user = PenggunaModel::where([
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        ])->first();

        if (!is_null($user)) {
            $this->session->set_userdata('user', $user);
            redirect(base_url());
        } else {
            $validation = $this->validator->make([], []);
            $validation->errors()->add('password', 'the password is invalid');

            $this->session->set_flashdata('errors', $validation->errors());
            $this->session->set_flashdata('old', $this->input->post());
            redirect(base_url('autentikasi/login'));
        }
    }

    public function dologout() {
        $this->auth();
        $this->session->unset_userdata('user');
        redirect(base_url());
    }

    public function doregister() {
        $this->redirectIfAuthenticated();
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

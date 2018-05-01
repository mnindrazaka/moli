<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends MY_Controller {

    public function login() {
        $this->view('autentikasi.login');
	}

    public function register() {
        $this->view('autentikasi.register');
    }

    public function dologin() {
        $this->validate($this->input->post(), [
            'email' => 'required|email|exists:pengguna',
            'password' => 'required|string'
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
        $this->session->unset_userdata('user');
        redirect(base_url());
    }
}

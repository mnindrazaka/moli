<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_Controller {

    public function index() {
        $data['user'] = $this->session->userdata('user');
        $this->view('profil.index', $data);
	}

	public function edit() {
        $data['user'] = $this->session->userdata('user');
        $this->view('profil.edit', $data);
    }

    public function editPassword() {
        $data['user'] = $this->session->userdata('user');
        $this->view('profil.editPassword', $data);
    }

    public function update($id) {
        $post = $this->input->post();

        $this->validate($this->input->post(), [
            'nama' => 'required|string|min:6',
            'telp' => 'required|string'
        ]);

        if($this->input->post('email') != '') {
            $this->validate($this->input->post(), [
                'email' => 'required|email|unique:pengguna'
            ]);
        } else {
            unset($post['email']);
        }

        if(!empty($_FILES['foto']['name'])){
            $post['foto'] = $this->do_upload('foto', 'assets/uploads/pengguna', 'image', TRUE);
            $pengguna = PenggunaModel::find($id);
            unlink('assets/uploads/pengguna/' . $pengguna->foto);
        }

        PenggunaModel::find($id)->update($post);
        $user = PenggunaModel::find($id);
        $this->session->set_userdata('user', $user);
        redirect(base_url('profil'));
    }

    public function updatePassword($id) {
        if(md5($this->input->post('old_password')) != $this->session->userdata('user')->password) {
            $validation = $this->validator->make([], []);
            $validation->errors()->add('old_password', 'the old password is invalid');

            $this->session->set_flashdata('errors', $validation->errors());
            redirect(base_url('profil/editPassword'));
        }

        $this->validate($this->input->post(), [
            'password' => 'required|string|min:6|confirmed'
        ]);

        $_POST['password'] = md5($_POST['password']);
        PenggunaModel::find($id)->update($this->input->post());
        $user = PenggunaModel::find($id);
        $this->session->set_userdata('user', $user);
        redirect(base_url('profil'));
    }
}

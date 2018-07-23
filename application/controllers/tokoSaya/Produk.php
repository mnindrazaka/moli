<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller {

    public function __construct() {
        parent::__construct();

        if(is_null($this->session->userdata('user')->id_toko)) {
            redirect(base_url('tokoSaya/register'));
        }
    }

    public function index($offset = 0) {
        $data['pagination'] = $this->paginate(
            TokoModel::find($this->session->userdata('user')->id_toko)->produk,
            2,
            base_url('tokoSaya/produk/index')
        );

        $data['produk'] = ProdukModel::where([
            'id_toko' => $this->session->userdata('user')->id_toko
        ])->offset($offset)->limit(2)->get();

        $this->view('tokoSaya.produk.index', $data);
    }

    public function create() {
        $data['kategori'] = KategoriModel::all();
        $this->view('tokoSaya.produk.create', $data);
    }

    public function store() {
        $this->validate($this->input->post(), [
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'id_kategori' => 'required|numeric',
            'satuan' => 'required|string',
            'harga' => 'required|numeric'
        ]);
        $_POST['id_toko'] = $this->session->userdata('user')->id_toko;
        $_POST['status'] = 1;

        if(!empty($_FILES['foto']['name'])){
            $_POST['foto'] = $this->do_upload('foto', 'assets/uploads/produk', 'image', TRUE);
        }

        ProdukModel::create($this->input->post());
        redirect('tokoSaya/produk');
    }

    public function edit($id) {
        $data['kategori'] = KategoriModel::all();
        $data['produk'] = ProdukModel::find($id);
        $this->view('tokoSaya.produk.edit', $data);
    }

    public function update($id) {
        $this->validate($this->input->post(), [
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'id_kategori' => 'required|numeric',
            'satuan' => 'required|string',
            'status' => 'required|numeric',
            'harga' => 'required|numeric'
        ]);

        if(!empty($_FILES['foto']['name'])){
            $_POST['foto'] = $this->do_upload('foto', 'assets/uploads/produk', 'image', TRUE);
            $produk = ProdukModel::find($id);
            unlink('assets/uploads/produk/' . $produk->foto);
        }

        ProdukModel::find($id)->update($this->input->post());
        redirect('tokoSaya/produk');
    }

    public function delete($id) {
        ProdukModel::destroy($id);
        redirect('tokoSaya/produk');
    }
}

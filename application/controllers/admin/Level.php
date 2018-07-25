<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Level extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->authenticate();
    }

    public function index() {
        $data['level'] = LevelModel::all();
        $this->view('admin.level.index', $data);
    }

    public function create() {
        $data['modul'] = ModulModel::all();
        $this->view('admin.level.create', $data);
    }

    public function store() {
        $this->validate($this->input->post(), [
            'nama' => 'required|string'
        ]);
        $level = LevelModel::create($this->input->post());

        // insert akses
        foreach ($this->input->post('id_modul') as $row) {
            AksesModel::create([
                'id_level' => $level->id_level,
                'id_modul' => $row
            ]);
        }

        redirect(base_url('admin/level'), 'refresh');
    }

    public function edit($id) {
        $data['level'] = LevelModel::find($id);
        $data['modul'] = ModulModel::all();

        $data['level_akses'] = array_map(function ($item) {
            return $item['id_modul'];
        }, $data['level']->akses->toArray());

        $this->view('admin.level.edit', $data);
    }

    public function update($id) {
        $this->validate($this->input->post(), [
            'nama' => 'required|string'
        ]);
        LevelModel::find($id)->update($this->input->post());

        // update akses
        AksesModel::where('id_level', $id)->delete();
        foreach ($this->input->post('id_modul') as $row) {
            AksesModel::create([
                'id_level' => $id,
                'id_modul' => $row
            ]);
        }
        redirect(base_url('admin/level'), 'refresh');
    }

    public function delete($id) {
        LevelModel::destroy($id);
        redirect(base_url('admin/level'), 'refresh');
    }
}

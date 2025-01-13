<?php

namespace App\Controllers;

use App\Models\GameModel;
use CodeIgniter\Controller;

class Admin extends Controller
{
    public function index()
    {
        $model = new GameModel();
        $data['games'] = $model->findAll();

        return view('admin/index', $data);
    }

    public function fetchGames()
    {
        $model = new GameModel();
        $data['games'] = $model->findAll();
        
        return $this->response->setJSON($data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $response = [];
        
        // Validasi data formulir, upload gambar, dll.
        $gambar = $this->request->getFile('gambar');
    
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $gambar->move(ROOTPATH . 'public/uploads');
            $namaGambar = $gambar->getName();
        } else {
            $namaGambar = null;
        }
    
        // Set data yang akan disimpan ke dalam database
        $data = [
            'nama_game' => $this->request->getPost('nama_game'),
            'gambar' => $namaGambar,
            'game_link' => $this->request->getPost('game_link'),
            'category' => $this->request->getPost('category')
        ];
    
        $model = new GameModel();
        if ($model->insert($data)) {
            $response['status'] = 'success';
            $response['message'] = 'Game added successfully';
            $response['data'] = $data; // Optionally return inserted data
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Failed to add game';
        }
    
        return $this->response->setJSON($response);
    }

    public function edit($id)
    {
        $model = new GameModel();
        $data['game'] = $model->find($id);

        return view('admin/edit', $data);
    }

    public function fetchGame($id)
    {
        $model = new GameModel();
        $data['game'] = $model->find($id);

        return $this->response->setJSON($data);
    }

    public function update()
{
    $response = [];

    $model = new GameModel();
    $data = [
        'nama_game' => $this->request->getPost('nama_game'),
        'game_link' => $this->request->getPost('game_link'),
        'category' => $this->request->getPost('category')
    ];

    if ($model->update($this->request->getPost('id'), $data)) {
        $response['status'] = 'success';
        $response['message'] = 'Game updated successfully';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Failed to update game';
    }

    return $this->response->setJSON($response);
}


    public function delete($id)
    {
        $response = [];
        
        $model = new GameModel();
        if ($model->delete($id)) {
            $response['status'] = 'success';
            $response['message'] = 'Game deleted successfully';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Failed to delete game';
        }
        
        return $this->response->setJSON($response);
    }
}

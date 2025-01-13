<?php

namespace App\Models;

use CodeIgniter\Model;

class GameModel extends Model
{
    protected $table = 'game';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_game', 'gambar', 'game_link', 'category'];
    public function getGames()
    {
        return $this->findAll();
    }
}

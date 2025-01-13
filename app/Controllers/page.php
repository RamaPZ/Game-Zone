<?php namespace App\Controllers;

use App\Models\GameModel;

class Page extends BaseController
{
    public function about()
    {
        echo view("about");
    }

    public function contact()
    {
        echo view("contact");
    }

    public function faqs()
    {
        echo view("Faqs");
    }

    public function games()
    {
        $gameModel = new GameModel();
        $data['games'] = $gameModel->findAll();
        echo view("games", $data);
    }

    public function community()
    {
        echo view("community");
    }

    public function admin()
    {
        echo view("admin");
    }
}

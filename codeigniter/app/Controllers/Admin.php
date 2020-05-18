<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
    public function index()
    {
        $data["title"] = "Pemesanan";
        echo view('layout/head', $data);
        echo view('admin/home');
        echo view('layout/foot');
    }
}

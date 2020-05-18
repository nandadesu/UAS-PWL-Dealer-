<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Mobil extends Controller
{
    public function view()
    {
        $data["title"] = "Mobil X AE 12 2017";
        echo view('layout/head', $data);
        echo view('mobil/view');
        echo view('layout/foot');
    }
}

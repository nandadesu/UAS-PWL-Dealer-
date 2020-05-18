<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data["id_admin"] = true;
        return view("admin.home", $data);
    }
}

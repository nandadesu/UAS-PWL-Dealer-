<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data["title"] = "Home";
		echo view('layout/head', $data);
		echo view('home');
		echo view('layout/foot');
	}

	//--------------------------------------------------------------------

}

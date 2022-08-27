<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        $estructura = view('estructura/header').view('estructura/body');
        return $estructura;
    }
}

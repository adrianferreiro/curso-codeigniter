<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HolaMundo extends BaseController
{
    public function index()
    {
        return view('vista_hola_mundo');
    }
}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use Config\DataBase;

class Home extends BaseController
{
    public function index()
    {
        $dbPrimary   = Database::connect('default');
        //inicializamos instancia de nuestro modelo
        $userModel = new UserModel($dbPrimary);
        //vamos a buscar un usuario
        $user=$userModel->find('1');
        //nos retorna un arreglo
        //var_dump($user);

        $estructura = view('estructura/header').view('estructura/body', $user);
        return $estructura;
    }
}

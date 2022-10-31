<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'NIS' => 31312129,
            'Name' => 'Rifqi',
            'Phone' => '082325093972',
            'class' => 'XII RPL 4'
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return [ 'nis' => '3103118041',
        'name' => 'Dennisya Varendita Setiawan',
        'gender' => 'Perempuan',
        'phone' => '082241998613',
        'class' => 'XII RPL 2'];
    }
}

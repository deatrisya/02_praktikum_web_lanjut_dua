<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return 'Nama : Deatrisya Mirela Harahap' .'<br>'
        . 'NIM : 2041720013';
    }
}

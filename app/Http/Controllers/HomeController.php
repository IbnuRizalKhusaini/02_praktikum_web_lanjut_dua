<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }
    public function about(){
        echo "NIM  : 2031710004 <br>";
        echo "Nama : Ibnu Rizal Khusaini";
    }
    public function articles ($id=1){
        echo "Halaman Artikel dengan Id ", $id;
    }
}

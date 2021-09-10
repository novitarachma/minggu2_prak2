<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about($namaku, $nim){
        echo 'Namaku adalah '.$namaku.' dan NIM ku adalah '.$nim; 

    }

    public function articles($id){
        echo 'Halaman article dengan ID '.$id;
    }
}

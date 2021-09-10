<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about($namaku, $nim){
        echo 'Namaku adalah '.$namaku.' dan NIM ku adalah '.$nim; 
}
}
<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller{
    
    public function index(){
        $a_meta_seo = array();
        $a_meta_seo['title'] = 'Carlos Amores ✌ Web personal';
        $a_meta_seo['description'] = 'Carlos Salvador Amores Martinez, trabajo como Programador Back End en iAhorro (comparador financiero). Estudié Grado Ingeniera de Computadores en la Facultad de Informática de la UCM. Vivo en Moratalaz, Madrid, pero soy nacido en Ecuador.';
        $a_meta_seo['canonical'] = env('APP_URL');
        return view('frontend.home.home', compact('a_meta_seo'));
    }
}
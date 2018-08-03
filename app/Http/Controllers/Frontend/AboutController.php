<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Redirector;

class AboutController extends Controller{

    
    public function index(){
        
        $a_meta_seo = array();
        $a_meta_seo['title'] = '✆ Acerca de Carlos Amores ✉';
        $a_meta_seo['description'] = 'Descripcion de mi perfil';
        $a_meta_seo['canonical'] = env('APP_URL').'/about';

        return view('frontend.about.about', compact('a_meta_seo'));
    }



    public function bragas(){
        
        $a_meta_seo = array();
        $a_meta_seo['title'] = 'Ventas de bragas usadas. Lencería y bikinis usadas en Madrid';
        $a_meta_seo['description'] = '';
        $a_meta_seo['canonical'] = env('APP_URL').'/compra-venta-bragas-usadas.html';

        return view('frontend.postBragas.bragas', compact('a_meta_seo'));
    }

}
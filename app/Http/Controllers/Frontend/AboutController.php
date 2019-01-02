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
        return redirect('https://www.bragasexy.es/compra-venta-bragas-usadas.html', 301);
        $a_meta_seo = array();
        $a_meta_seo['title'] = 'Venta de bragas o tangas usadas. Lencería y bikinis usadas en Madrid';
        $a_meta_seo['description'] = 'Venta de bragas usadas. Eres de esos hombres fetichistas que les gusta la ropa interior feminina usadas? Ahora es el momento, tienes gran variedad de ofertas por Internet, he creado este articulo porque una amiga está interesada en vender este tipo de ropa interior. Solo tienes con contactar con ella o con el admin de esta web. Un saludo :)';
        $a_meta_seo['canonical'] = env('APP_URL').'/compra-venta-bragas-usadas.html';

        return view('frontend.postBragas.bragas', compact('a_meta_seo'));
    }


    public function primitiva(){
        
        $a_meta_seo = array();
        $a_meta_seo['title'] = 'Generar numeros al azar para la primitiva';
        $a_meta_seo['description'] = 'Generador de numeros para la primitiva, incluido el reintegro';
        $a_meta_seo['canonical'] = env('APP_URL').'/compra-venta-bragas-usadas.html';

        for ($i=0; $i < 6; $i++) {
            $numeros[$i] = mt_rand(1, 49);
        }
        asort($numeros);
        $reintegro = mt_rand(0, 9);

        return view('frontend.primitiva', compact('a_meta_seo', 'numeros', 'reintegro'));
    }

}
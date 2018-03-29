<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller{
    
    public function index(){
        $a_meta_seo = array();
        $a_meta_seo['title'] = 'Carlos Amores';
        $a_meta_seo['description'] = 'Carlos Amores iAhorr, UMC, FDI, Ecuador Madrid, La Maná';
        $a_meta_seo['canonical'] = env('APP_URL');
        return view('frontend.home', compact('a_meta_seo'));
    }
}
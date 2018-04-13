<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Http\Controllers\Controller;

class ContactController extends Controller{
    
    public function index(){
        $a_meta_seo = array();
        $a_meta_seo['title'] = '✆ Contacta conmigo ✉';
        $a_meta_seo['description'] = 'Si quieres contactare conmigo solo tienes que rellenar el formulario y me pondré contacto via email o teléfono.';
        $a_meta_seo['canonical'] = env('APP_URL').'/contacto/';
        return view('frontend.contact.contact', compact('a_meta_seo'));
    }
}
<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Redirector;

class ContactController extends Controller{

    public $sent = 'null';
    
    public function index(){
        $a_meta_seo = array();
        $a_meta_seo['title'] = '✆ Contacta conmigo ✉';
        $a_meta_seo['description'] = 'Si quieres contactare conmigo solo tienes que rellenar el formulario y me pondré contacto via email o teléfono.';
        $a_meta_seo['canonical'] = env('APP_URL').'/contacto';
        $sent = $this->sent;
        //dd($sent);
        return view('frontend.contact.contact', compact('a_meta_seo', 'sent'));
    }

    public function send_message(Request $request){
    	$input = $request;

    	$msg = 'De: ' . $input->name . ', Email: ' . $input->email . ', Mensaje: ' . $input->message;


    	if(mail('admin@amorescarlos.com', $input->subject, $msg)){
    		$this->sent = 'si';
    	}else{
    		$this->sent = 'no';
    	}

    	//dd($sent);
        return redirect()->route('contact');
    }
}
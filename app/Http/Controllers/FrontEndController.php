<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function index(){
        return view('sitio.pages.index');//busca la vista que va a utilizar
    }

    function nosotros(){
        return view('sitio.pages.nosotros');
    }

    function servicios(){
        return view('sitio.pages.servicios');
    }

    function juego(){
        return view('sitio.pages.juego');
    }

    function still(){
        return view('sitio.pages.still');
    }

    function contacto(){
        return view('sitio.pages.contacto');
    }

    function login(){
        return redirect()->route('login');
    }
}

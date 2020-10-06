<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function index() {
    return view('welcome');
    }
    
    public function inicio() {
        return view('welcome');
    }
    
    public  function ContCategoria(){
        return view('categoria');
    }

}//End de class

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function index(){
     return view ('index');
}

public function khalo(){
     return view ('khalo');
}
public function miguel(){
    return view ('miguel');
}
public function dali(){
    return view ('dali');
}
public function picasso(){
    return view ('picasso');
}
public function monet(){
    return view ('monet');
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    } 

    public function about(){
        return 'NAMA:RISTA <br> NIM:2341728002';
    } 

    public function article($id){
        return 'Halaman Article ID '.$id;
    } 
}

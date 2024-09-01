<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return inertia('Index/Index',
            [
                'message'=>'Pesan dari Halaman Index',
            ]);
    }

    public function show(){
        return inertia('Index/Show');
    }

    public function login(){
        return inertia('Index/Login', [
            'nama'=> 'Cepi Yoga Asmara'
        ]);
    }
}

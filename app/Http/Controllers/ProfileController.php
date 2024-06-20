<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $datas = [
            [
                'name'=>'Rajat',
                'age'=> 25,
            ],
            [
                'name'=>'Test',
                'age'=> 45,
            ]
        ];
        return view('profile', ["datas"=>$datas]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class DashboardController extends Controller
{
    public function index(){

        // $idea = new Idea([
        //     'content'=>'omes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. '
        // ]);
        // $idea->save();

        $ideas = Idea::orderBy('created_at', 'DESC')->get();
        return view('home', ['ideas'=> $ideas]);
    }

    public function terms(){
        return view("terms");
    }
}
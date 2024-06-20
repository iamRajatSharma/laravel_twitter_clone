<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class DashboardController extends Controller
{
    public function index(){
        $ideas = Idea::orderBy('created_at', 'DESC')->paginate(5);
        return view('home', ['ideas'=> $ideas]);
    }

    public function terms(){
        return view("terms");
    }
}
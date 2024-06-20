<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class IdeaController extends Controller
{
    public function store(Request $request){
        $idea = new Idea();
        $idea->content = $request['idea'];
        $idea->save();
        return redirect()->route('home')->with('success', 'Idea Created Successfully');

    }
}
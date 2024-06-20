<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use Illuminate\Support\Facades\Validator;

class IdeaController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'idea' => 'required|min:5|max:250'
        ]);


        if($validator->passes()){
            $idea = new Idea();
            $idea->content = $request['idea'];
            $idea->save();
            return redirect()->route('home')->with('success', 'Idea Created Successfully');
        }
        else{
            return redirect()->route('home')->withErrors($validator)
            ->withInput($request->only('idea'));
        }
    }


    public function delete($id){
        $idea = Idea::where('id',$id)->firstOrFail();
        $idea->delete();
        return redirect()->route('home')->with('success', 'Idea Deleted Successfully');
    }

    
}
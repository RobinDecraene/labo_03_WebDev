<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class ImageController extends Controller
{
   public function index(){
    $images = Image::all();

    return view('home', compact('images'));
   }

   public function create(){
        return view('create');
    }

    public function store(Request $r){
        $validationRules = [
            'bronlocatie' => 'required',
            'image' => 'required'
        ];

        $r->validate($validationRules);

        $image = new Image();
        $image->bronlocatie = $r->bronlocatie;
        $image->image = $r->image;
        $image->save();

        return redirect()->route('create');
    }

   public function delete(Image $image){
       $image->delete();
       return redirect()->route('home');
   }
}

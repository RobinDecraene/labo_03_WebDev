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
}

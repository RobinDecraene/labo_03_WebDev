<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;
use Symfony\Component\Console\Input\Input;

class ImageController extends Controller
{
   public function index(){
    $uploads = Upload::all();

    return view('home', compact('uploads'));
   }

   public function create(){
        return view('create');
    }

    public function store(Request $r){
        $validationRules = [
            'title' => 'required',
            'url' => 'required'
        ];
    
        $r->validate($validationRules);
    
        $upload = new Upload();
        $upload->url = $r->url;
        $upload->title = $r->title;
        $upload->save();
    
        $fileContents = @file_get_contents($upload->url);
    
        if ($fileContents !== false) {
            $save = file_put_contents('images/' . $upload->title . '.jpg', $fileContents);
            if ($save !== false) {
                var_dump('file has been added');
            } else {
                var_dump('error saving file');
            }
        } else {
            var_dump('error reading file');
        }
    
        return redirect()->route('create');
    }


   public function delete(Upload $upload){
       $upload->delete();
       return redirect()->route('home');
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galleries;

class GalleryController extends Controller
{
  public function index($lang){
    $galleries = Galleries::where('active',1)->paginate(10);
    return view('gallery', compact('galleries', 'lang'));
  }
  public function create(Request $req){
    $gal = new Galleries();
    $destinationPath = 'gallery';
    if($req->file('file') != null){
      $extension = $req->file('file')->getClientOriginalExtension();
      if($extension == 'jpeg' || $extension == 'jpg' || $extension == 'png'){
        $fileName = $destinationPath."/".rand(11111,9999999).'.'.$extension;
        $req->file('file')->move($destinationPath, $fileName);
      }else{
        return back();
      }
    }else{
      return back();
    }
    $gal->caption = $req->caption;
    $gal->source = $fileName;
    $gal->type = $req->type;
    $gal->save();
    return back();
  }

  public function update(Request $req){
    $gal = Galleries::find($req->id);
    $gal->caption = $req->caption;
    $gal->save();
    return back();
  }

  public function delete($id){
    $gal = Galleries::find($id);
    if($gal){
      $gal->delete();
    }
    return back();
  }
  
  public function disable(Request $req){
    $gal = Galleries::find($req->id);
    if($gal->active == 1){
      $gal->active = 0;
    }else{
      $gal->active = 1;
    }
    $gal->save();
    return back();
  }
}

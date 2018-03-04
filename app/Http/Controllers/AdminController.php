<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Galleries;

class AdminController extends Controller
{
  public function index(){
    $admins = User::paginate(10);

    return view('admin.index', compact('admins'));
  }

  public function create(Request $req){
    $user = new User();
    $user->name = $req->name;
    $user->surname = $req->surname;
    $user->email = $req->email;
    $user->password = Hash::make($req->password);
    $user->save();
    return back();
  }

  public function remove($id){
    $user = User::find($id);
    if($user){
        $user->delete();
        return redirect('/admin');
    }
  }

  public function update(Request $req){
    $user = User::find($req->id);
    if($user){
      $user->name = $req->name;
      $user->surname = $req->surname;
      $user->email = $req->email;
      $user->save();
    }
    return back();
  }
  public function gallery(){
    $galleries = Galleries::paginate(10);
    return view('admin.gallery', compact('galleries'));
  }
}
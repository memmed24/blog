<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
  public function index(){
    $files = DB::table('files')->paginate(10);

    return view('admin.files', compact('files'));
  }

  public function create(Request $request){
    $destinationPath = 'files';
    print_r($request->file('file')->getClientOriginalExtension());
    if($request->file('file') != null){
      $extension = $request->file('file')->getClientOriginalExtension();
      if($extension == 'doc' || $extension == 'pdf' || $extension == 'xls'){
        $fileName = $destinationPath."/".rand(11111,9999999).'.'.$extension;
        $request->file('file')->move($destinationPath, $fileName);
      }else{
        return back();
      }
    }else{
      return back();
    }
    DB::table('files')->insert([
      'caption' => $request->caption,
      'source' => $fileName
    ]);
    return back();
  }

  public function remove($id){
    $file = DB::table('files')->where('id', $id)->delete();

    return back();
  }
}

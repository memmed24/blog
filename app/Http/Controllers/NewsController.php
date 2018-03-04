<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\News;
use App\News_category;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(10);
        $categories = News_category::all();

        return view('admin.news', compact('news', 'categories'));
    }
    public function create(Request $req){
        $news = new News();
        $destinationPath = 'images'; 
        $extension = $req->file('file')->getClientOriginalExtension(); 
        $fileName = $destinationPath."/".rand(11111,9999999).'.'.$extension; 
        $req->file('file')->move($destinationPath, $fileName);
        $news->title_az = $req->title_az;
        $news->title_en = $req->title_en;
        $news->title_ru = $req->title_ru;
        $news->category = $req->category;
        $news->content_az = $req->content_az;
        $news->content_en = $req->content_en;
        $news->content_ru = $req->content_ru;
        $news->link = $req->link;
        $news->photo = $fileName;
        $news->active = 1;
        $news->save();
        return back();
    }

    public function update(Request $request){
      $news = News::find($request->id);

      if($news){
        $news->title_az = $request->title_az;
        $news->title_en = $request->title_en;
        $news->title_ru = $request->title_ru;
        $news->content_az = $request->kontent_az;
        $news->content_en = $request->kontent_en;
        $news->content_ru = $request->kontent_ru;
        $news->category = $request->category;
        $news->save();
      }
      return back();
    }

    public function active(Request $req){
      $news = News::find($req->id);

      if($news){
        if($news->active == 0){
          $news->active = 1;
        }else{
          $news->active = 0;
        }
        $news->save();
        return back();
      }
    }
    public function getNews($lang,$id){
      $news = DB::table('news')->where('id' , $id)->where('active', 1)->first();
      $title = 'title_'.$lang;
      $content = 'content_'.$lang;
      if(count($news) != 0){
        return view('singlenews', compact('news', 'lang', 'title', 'content'));
      }
      return redirect($lang.'/news');
    }

    public function delete($id){
      $news = News::find($id);
      if($news) $news->delete();
      return back();
    }
}

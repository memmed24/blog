<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
      $news = News::select("id", "title_".$lang, "content_".$lang, "photo")
                  ->where('active', 1)
                  ->limit(3)
                  ->orderBy('created_at', 'desc')
                  ->get();


      return view('home', compact('news', 'lang'));
    }

    public function about($lang){
      return view('about', compact('lang'));
    }
    public function mission($lang){
      return view('mission', compact('lang'));
    }
    public function shipping($lang){
      return view('shipping', compact('lang'));
		}
		public function railway($lang){
			return view('railway', compact('lang'));
		}
		public function auto($lang){
			return view('auto', compact('lang'));
		}
		public function multi($lang){
			return view('multi', compact('lang'));
		}
		public function door($lang){
			return view('door', compact('lang'));
		}
		public function contact($lang){
			return view('contact', compact('lang'));
		}
		public function soon($lang){
			return view('soon',compact('lang'));
		}
		public function container($lang){
			return view('container', compact('lang'));
		}
		public function train($lang){
			return view('train', compact('lang'));
		}
		public function info($lang){
			return view('info', compact('lang'));
    }
    public function news($lang){
      $news = News::select("id", "title_".$lang, "content_".$lang, "photo", "category")
                  ->where('active', 1)
                  ->limit(9)
                  ->orderBy('created_at', 'desc')
                  ->paginate();
      return view('news', compact('lang', 'news'));
    }
    public function email(Request $request){
      Mail::to("memmed_memmedli@hotmail.com")->send(new Contact($request));
      return back();
    }
}

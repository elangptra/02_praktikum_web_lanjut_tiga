<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($berita = null){
        if($berita==null){
            return redirect() -> to('https://www.educastudio.com/news');
        }else{
            return redirect() -> to('https://www.educastudio.com/news/'.$berita);
        }
    }
}

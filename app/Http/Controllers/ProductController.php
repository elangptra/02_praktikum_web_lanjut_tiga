<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function edu(){
        return redirect() -> to('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function kids(){
        return redirect() -> to('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function books(){
        return redirect() -> to('https://www.educastudio.com/category/riri-story-books');
    }

    public function kidSongs(){
        return redirect() -> to('https://www.educastudio.com/category/kolak-kids-songs');
    }
}

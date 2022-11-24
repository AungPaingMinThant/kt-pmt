<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharePostController extends Controller
{
    public function share($value='')
    {
        return view('blog.share_post');
    }
}

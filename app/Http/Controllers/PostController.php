<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->get()]);  
    }
}
?>

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Session;

class ArticleController extends Controller
{
    public function getArticle(){
        if(!Session::has('statusLogin'))
            return redirect('/admin/login')->with('notification','Phiên đăng nhập của bạn đã hết');
        $article = Article::first();
        return view('admin/article/getArticle',['article'=>$article]);
    }
    public function putArticle(Request $request){
        $this->validate($request,
        [
            'title'=>'required',
            'description'=>'required',
            'content'=>'required'
        ],
        [
            'title.required'=>'Tiêu đề bài viết không được để trống',
            'description.required'=>'Mô tả ngắn không được để trống',
            'content.required'=>'Nội dung không được để trống'
        ]);
        $article = Article::first();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;
        $article->save();
        return redirect('admin/article')->with('notification','Cập nhật thành công');
    }
}

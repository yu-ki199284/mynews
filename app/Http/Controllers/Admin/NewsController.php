<?php

class NewsController extends Controller
{
    public function add()
    {
        return view('admin.news.create');
    }
    public function create(Request $request)
    {
        // admin/news/createにリダイレクトする
        return redirect('admin/news/create');
    }
}

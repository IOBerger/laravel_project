<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Categories;
use Illuminate\View\View;

use Illuminate\Support\Facades\DB;

use App\Models\NewsModel;

class News extends Controller
{

    public function list($category = 0){
 
        if(!$category){
            $list = NewsModel::where('is_active',1)->orderBy('title')->paginate(5);
        }else{
            $list = NewsModel::where([
                    ['is_active', '=', 1],
                    ['category', '=', $category]
                ])->orderBy('title')->paginate(5);
        }    
        if($category == 0){
            $categoryTitle = 'all';
        }else{
            $categoryTitle = Categories::titleByID($category)[0]->title;
        }
        return view('pages.news', ['news' => $list,'categoryName' => $categoryTitle]);
    
    }

    public function newsShowItem($id){
    
        $item=NewsModel::where([
            ['is_active', '=', 1],
            ['id', '=', $id]
        ])->get();
        return view('pages.newsItem', ['newsItem' => $item]);

    }

    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $newsItem = new NewsModel;
            $newsItem->title = $request->title;
            $newsItem->created_at = now();
            $newsItem->text = $request->long_description;
            $newsItem->category = $request->category;
            $newsItem->is_active = 1;
            $newsItem->source = 1;
            $newsItem->save();
        }
        $categories = DB::table('categories')->select('id','title','importance')->where('is_active','=',1)->orderBy('title')->get();    
        return view('admin.addNewsItem', ['categories' => $categories]);
    }

}

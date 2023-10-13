<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\CategoriesModel;

class Categories extends Controller
{
    //
    public function list(){
        
        $list = DB::table('categories')->select('id','title','importance')->where('is_active','=',1)->orderBy('title')->get();
        return view('pages.news_categories', ['categories' => $list]);
    
    }

    public static function titleByID($id){
        
        $title = CategoriesModel::where('id',$id)->get();
        return $title;
    
    }

}

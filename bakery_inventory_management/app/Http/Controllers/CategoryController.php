<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function CategoryPage(){
        return view('pages.dashboard.category-page');
    }

    function CategoryCreate(Request $request){
        $user_id = $request->header('id');
        return Category::create([
            'name'=>$request->input('name'),
            'user_id'=>$user_id
        ]);
    }

    function CategoryList(Request $request){
        $user_id = $request->header('id');
        return Category::where('user_id', $user_id)->get();
    }

    function CategoryUpdate(Request $request){
        $user_id = $request->header('id');
        $category_id = $request->input('id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->update([
            'name'=>$request->input('name')
        ]);
    }

    function CategoryDelete(Request $request){
        $user_id = $request->header('id');
        $category_id = $request->input('id');
        return Category::where('id',$category_id)->where('user_id',$user_id)->delete();
    }
}

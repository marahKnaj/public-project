<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobs;
use App\Models\category;
use App\Models\User;
use App\Models\subcategory;
use App\Models\notifaction;
class CategoryController extends Controller
{
    public function index(){
        $jobs = User::find(1);
        return $jobs->subcategories;
    }
    public function create(){
return view('category.create');
    }

public function store(Request $request){
    $category = new category();
    $category->name=$request->input('name');
    $category->notified=0;
    $category->save();

    $notifaction = new notifaction();
    $notifaction->messageStatus='false';
    $notifaction->message='تم ارسال الاشعار';
    $notifaction->save();
}

}

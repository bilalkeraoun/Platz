<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function show(Category $category){
        return view('categories.show', compact('category'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function library()
    {
      
        return view('library');
    }

    public function libraryCategory()
    {
      $categories = Category::get();
      $books = Book::get();
      
        return view('library/category', array('categories' => $categories, 'books' => $books));
    }
}

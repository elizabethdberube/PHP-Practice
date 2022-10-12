<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;

class LibraryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * 
    * @param  int  $id
    * @return \Illuminate\View\View
    */
     
    public function __construct()
    {
      //  $this->middleware('auth');
    }
    public function library()
    {
      $categories = Category::get();
      $books = Book::get();

        return view('library', array('categories' => $categories, 'books' => $books));
    }

    public function libraryCategory($id)
   {
       return view('categories', [
           'categories' => Category::get($id)
       ]);
    // {
    //   $categories = Category::get();
    //   $books = Book::get();
      
    //     return view('library/category', array('categories' => $categories, 'books' => $books));
    // }
   }


  }

  


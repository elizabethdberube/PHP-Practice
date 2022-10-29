<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;

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

    public function libraryCategory($category_id)
   {

    $books = Book::find($category_id);

  

       return view("library", array( 'books' => $books));
 
   }
  //  public function selectBook($id)
  //  {

  //   $user = User::get($id);
  //   $books = Book::get($id);

  //      return view('categories', array('category' => $category, ));
    
  //  }


  }

  


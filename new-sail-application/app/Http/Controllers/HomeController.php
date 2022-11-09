<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Book_Checkout;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
      // $categories = Category::get();
      // $books = Book::get();
      $id = auth()->id();
      $userId= User::find($id);


   //     return view('dashboard', array('categories' => $categories, 'books' => $books, 'book_checkouts' => $book_checkouts));
   return view('dashboard', array('user' => $userId));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Bookcheckout;

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
   
      $id = auth()->id();
      $userId= User::find($id);
      $userBooks= Bookcheckout::where('user_id', $userId['id'])->get('book_id');
      $bookListItems= Book::find($userBooks);


  
   return view('dashboard', array('user' => $userId, 'bookListItems'=> $bookListItems));
    }
}

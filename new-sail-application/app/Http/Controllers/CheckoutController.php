<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;

class CheckoutController extends Controller
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
       $this->middleware('auth');
    }
    public function checkout($id)
    {
     
        $userId = auth()->id();
        $user= User::find($userId);
        $book = Book::find($id);

        

        return view('checkout', array('user' => $user, 'book' => $book));
    }

    public function store()
    {

     return view('checkout');
    }

   }



  

  


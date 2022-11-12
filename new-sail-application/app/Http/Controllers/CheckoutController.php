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

    public function store($id)
    {
        $userId = auth()->id();
        $user= User::find($userId);
        $selectedBook = Book::find($id);
        $validatedData = $selectedBook->validate([
            'name' => 'required|max:255',
            'price' => 'required',
        ]);
        $checkoutBook = Book_checkout::create($validatedData);

     return redirect('/home')->with('success', 'Book is successfully checked out');
   }


}
  

  


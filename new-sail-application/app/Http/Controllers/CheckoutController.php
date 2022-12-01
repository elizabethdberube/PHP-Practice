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

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store($id)
    {
        $userId = auth()->id();
        $user= User::find($userId);
        
        $selectedBook = Book::findOrFail($id);
        $selectedBook = checkout();

        $data = array( $user =>$request->input('user_id'),
        $selectedBook =>$request->input('book_id'),
        'checkout_date'=> now(),
        'book_issue_status'=>$request->input('Issue'),
     
    );

    Book_checkout::create($request->all());

     return redirect()->route('library')->with('success', 'Book is successfully checked out');
   }




}
  

  


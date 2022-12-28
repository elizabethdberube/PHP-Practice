<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class SettingsController extends Controller
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
    public function settings()
    {
        $userId = auth()->id();
        $user= User::find($userId);

        return view('settings', array('user' => $user));
    }

public function store(Request $request)
    
    {
    
        $idUser = auth()->id();
        $storeUser= User::find($idUser);
        
       

        $data = array( 'id'=>$request->input('id'),
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'password'=>$request->input('password'),
     
    );

    User::create($request->all());

     return redirect()->route('settings')->with('success', 'Profile is successfully updated');
   }
}

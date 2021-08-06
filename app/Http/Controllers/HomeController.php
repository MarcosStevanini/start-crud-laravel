<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateUser;

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
    public function index() {
        $list = CreateUser::all();
        
        return view('home', compact('list'));
    }

    public function create () {
      return view('create');
    }
    
    public function store (Request $request) {

      // $data = $request->all(); 
      CreateUser::create($request->input()); 

      return redirect()->route('home');
    }
    
    public function edit ($id) {

      $nameEdit = CreateUser::find($id);

      return view('edit', compact('nameEdit'));
    }

    public function update (Request $request, $id) {
      $nameEdit = CreateUser::findOrFail($id);
      $nameEdit->update($request->input());

      return redirect()->route('home');
    }
    
    public function delete ($id) {
      $deleteUser = CreateUser::find($id);
      $deleteUser->delete();

      return redirect()->route('home');
    }
}
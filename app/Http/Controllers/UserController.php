<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        // return dd($users);
        return view('dashboard.home', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {


      $result =  $request->validate([
            'username' => 'required',
            "email" => 'required|string|unique:users|email',
            'password'=> 'required|confirmed'
      ]);
    
      if($result){
        return dd('success');
      }      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
    public function author(User $user)
    {   
        $author = User::with('post')->find($user->id);
        $posts = $author->post;

        // dd($author , $posts);
        return view('post.author' , compact('posts', 'author'));
    }
}
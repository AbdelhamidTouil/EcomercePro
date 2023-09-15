<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{

/**
     * redirect
     */
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
    {
        return view('admin.home');
    } 
    else{
        return view('home.userpage');
    }
    }
 /**
     * index.
     */
    public function index()
    {
      return view('home.userpage');
    }




    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {
        abort(404);
    }


    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}

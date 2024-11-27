<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('images', compact('images'));
    }

    public function users()
    {
        $users = User::all();
        return view('users', compact('users'));
        //Ha de tornar els usuaris amb les seves imatges 
        //i els comentaris i likes corresponents
    }
}

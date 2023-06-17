<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageGallery;
use App\Models\User;
class CastController extends Controller
{
    //

public function home()
{
    $images=ImageGallery::all();
    return view('home',compact('images'));
}
public function profile($id)
{
    $images=ImageGallery::where('user_id','LIKE',$id)->get();
    $user=User::find($id);
    return view('profile',compact('images','user'));
}

public function about()
{
    $images=ImageGallery::all();
    return view('home',compact('images'));
}

public function hero()
{
    $images=ImageGallery::all();
    return view('home',compact('images'));
}

public function portfolio()
{
    $images=ImageGallery::all();
    return view('home',compact('images'));
}
public function service()
{
    $images=ImageGallery::all();
    return view('home',compact('images'));
}
public function team()
{
    $images=ImageGallery::all();
    return view('home',compact('images'));
}
public function contact()
{
    $images=ImageGallery::all();
    return view('home',compact('images'));
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Section;
use App\Models\College;
use App\Models\Payment;

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
    public function index()
    {
        return view('user');
    }

    public function adminHome()
    {
        $students=User::where('user_role','LIKE',0)->orWhere('user_role','LIKE',null)->get();
        $teachers=User::where('user_role','LIKE',3)->get();
        $staffs=User::where('user_role','LIKE',2)->get();
        $sections=Section::all();
        $allsections=Section::paginate(18);
        $colleges=College::all();
        $payments=Payment::where('status','LIKE','pending...')->get();
        return view('admin',compact('allsections','students','teachers','staffs','sections','colleges','payments'));
    }   
}

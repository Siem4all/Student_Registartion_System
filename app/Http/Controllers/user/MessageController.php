<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     } 
    public function index()
    {
        //
        $rid=Auth::user()->id;
        $messages=Message::where('reciever_id','LIKE',$rid)->orWhere('sender_id','LIKE',$rid)->limit(10)->get();
        return view('user.message.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $admin=User::where('user_role','LIKE',1)->first();
        if($admin){
            $message = new Message([
                'sender_id' =>  Auth::user()->id,
                'reciever_id' => $admin->id,
                'body' => $request->get('body'),
           ]);
           $message->save();
            return back();
        }
        else{
          return redirect('user_message')->with('error','Sorry, admin is not found');  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $message=Message::find($id); 
        $message->delete();
        return redirect('/user_message')->with('success', 'Deleted successfuly');


    }
}

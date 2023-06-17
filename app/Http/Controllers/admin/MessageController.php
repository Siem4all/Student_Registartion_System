<?php

namespace App\Http\Controllers\admin;
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
        $allusers=Message::orderBy('created_at', 'DESC')->paginate(10);
        $message=Message::latest()->first();
        $sid=$message->sender_id;
        $rid=$message->reciever_id;
        if($message->sender->user_role==1){
            $messages=Message::where('reciever_id','LIKE',$rid)->orWhere('sender_id','LIKE',$rid)->orderBy('created_at', 'DESC')->limit(10)->get();
            $user=User::find($rid);
            return view('admin.message.index',compact('user','allusers','messages','rid','sid','message'));  
        }
        else{
            $messages=Message::where('sender_id','LIKE',$sid)->orWhere('reciever_id','LIKE',$sid)->orderBy('created_at', 'DESC')->limit(10)->get();
            $user=User::find($sid);
            return view('admin.message.index',compact('user','allusers','messages','rid','sid','message'));
        }
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
        $message = new Message([
            'sender_id' =>  Auth::user()->id,
            'reciever_id' => $request->get('rid'),
            'body' => $request->get('body'),
       ]);
       $message->save();
        return back();
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
        $allusers=Message::paginate(10);
        $message=Message::find($id);
        $sid=$message->sender_id;
        $rid=$message->reciever_id;
        if($message->sender->user_role==1){
            $user=User::find($rid);
            $messages=Message::where('reciever_id','LIKE',$rid)->orWhere('sender_id','LIKE',$rid)->orderBy('created_at', 'DESC')->limit(10)->get();
            return view('admin.message.index',compact('user','allusers','messages','rid','sid','message'));
        }
        else{
            $user=User::find($sid);
            $messages=Message::where('sender_id','LIKE',$sid)->orWhere('reciever_id','LIKE',$sid)->orderBy('created_at', 'DESC')->limit(10)->get();
            return view('admin.message.index',compact('user','allusers','messages','rid','sid','message'));   
        }
        
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
        $message=Message::find($id); 
        $message->save();
        return back();
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
        $message=Message::find($id); 
        $message->catagory=$request->get('cat');
        $message->name=$request->get('name');
        $message->address=$request->get('address');
        $message->amount=$request->get('amount');
       $message->save();
        return redirect('/message')->with('success', 'Updated successfuly');
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
        return redirect('/message')->with('success', 'Deleted successfuly');


    }
}

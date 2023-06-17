<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\College;
class NoticeController extends Controller
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
        $notices=Notice::all();
        return view('admin.notice.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $colleges=College::all();
        return view('admin.notice.create',compact('colleges'));
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
        $notice = new Notice([
            'admin_id' => Auth::user()->id,
            'college_id' => $request->get('college'),
            'subject' => $request->get('subject'),
            'body' => $request->get('body')

       ]);
       $notice->save();
        return redirect('/notice')->with('success', 'Created successfuly');
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
        $colleges=College::all();
        $notice=Notice::find($id); 
        return view('admin.notice.edit',compact('notice','colleges'));
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
        $notice=Notice::find($id); 
        $notice->admin_id=Auth::user()->id;
        $notice->college_id=$request->get('college');
        $notice->subject=$request->get('subject');
        $notice->body=$request->get('body');
       $notice->save();
        return redirect('/notice')->with('success', 'Updated successfuly');
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
        $notice=Notice::find($id); 
        $notice->delete();
        return redirect('/notice')->with('success', 'Deleted successfuly');


    }
}

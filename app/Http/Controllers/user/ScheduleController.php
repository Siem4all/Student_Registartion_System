<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Section;
use App\Models\User;

class ScheduleController extends Controller
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
        $schedules=Schedule::all();
        return view('user.schedule.index',compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sections=Section::all();
        $teachers=User::where('user_role','LIKE',3)->get();
        return view('user.schedule.create',compact('teachers','sections'));
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
        
        $schedule = new Schedule([
            'teacher_id'=>$request->get('tid'),
            'section_id'=>$request->get('sid'),
            'start_at'=>$request->get('sat'),
            'days'=> json_encode($request->get('days'))
       ]);
       $schedule->save();
        return redirect('/user_schedule')->with('success', 'Created successfuly');
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
        $sections=Section::where('id','LIKE',$id)->get();
        $teachers=User::where('user_role','LIKE',3)->get();
        return view('user.schedule.create',compact('sections','teachers'));

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
        $sections=Section::all();
        $teachers=User::where('user_role','LIKE',3)->get();
        $schedule=Schedule::find($id); 
        return view('user.schedule.edit',compact('schedule','sections','teachers'));
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
        $schedule=Schedule::find($id); 
        $schedule->teacher_id=$request->get('tid');
        $schedule->section_id=$request->get('sid');
        $schedule->start_at=$request->get('sat');
        $schedule->days=$request->get('days');
       $schedule->save();
        return redirect('/user_schedule')->with('success', 'Updated successfuly');
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
        $schedule=Schedule::find($id); 
        $schedule->delete();
        return redirect('/user_schedule')->with('success', 'Deleted successfuly');


    }
}

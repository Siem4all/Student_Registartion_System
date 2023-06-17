<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Timetable;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Payment;
use App\Models\Bank;
class TimetableController extends Controller
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
        $timetables=Timetable::all();
        return view('admin.timetable.index',compact('timetables'));
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
        $banks=Bank::all();
        $studid=$request->get('stud');
        $schid=$request->get('sid');
        $schedule=Schedule::where('id','LIKE',$schid)->first();
        $payment=Payment::where('student_id','LIKE',$studid)->where('schedule_id','LIKE',$schid)->where('status','LIKE','paid')->first();
        if($payment){
            $timetable=Timetable::where('student_id','LIKE',$studid)->where('schedule_id','LIKE',$schid)->first();
            if(!$timetable){
                $timetable = new Timetable([
                    'student_id' => $request->get('stud'),
                    'schedule_id' => $request->get('sid'),
               ]);
               $timetable->save();
                return redirect('/timetable')->with('success', 'Created successfuly');
            }
            else{
                return redirect('/timetable')->with('error', 'This is created allready.');
            }
        }
        else{
            $pending=Payment::where('student_id','LIKE',$studid)->where('schedule_id','LIKE',$schid)->where('status','LIKE','pending...')->first();

            if($pending){
            return redirect('/timetable')->with('error', 'sorry, You have payment on pending status, either pay or delet it.');
            }
            else{
                return view('admin.payment.bank',compact('studid','schid','banks','schedule'));
            }
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
        $students=User::where('user_role','LIKE',0)->orWhere('user_role','LIKE',null)->get(); 
        return view('admin.timetable.create',compact('id','students'));
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
        $timetable=Timetable::find($id); 
        $timetable->delete();
        return redirect('/timetable')->with('success', 'Deleted successfuly');


    }
}

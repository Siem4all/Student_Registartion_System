<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $timetables=Timetable::where('student_id','LIKE',Auth::user()->id)->get();
        return view('user.timetable.index',compact('timetables'));
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
                $timetable = new Timetable([
                    'student_id' => $request->get('stud'),
                    'schedule_id' => $request->get('sid'),
               ]);
               $timetable->save();
                return redirect('/user_timetable')->with('success', 'Created successfuly');          
        
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
        $banks=Bank::all();
        $studid=Auth::user()->id;
        $schid=$id;
        $schedule=Schedule::where('id','LIKE',$schid)->first();
        $payment=Payment::where('student_id','LIKE',$studid)->where('schedule_id','LIKE',$schid)->where('status','LIKE','paid')->first();
        $timetable=Timetable::where('student_id','LIKE',$studid)->where('schedule_id','LIKE',$schid)->first();
        $pending=Payment::where('student_id','LIKE',$studid)->where('schedule_id','LIKE',$schid)->where('status','LIKE','pending...')->first();
        if($payment)
        {
            if($timetable)
            {
                return redirect('/user_timetable')->with('error', 'This is created allready.');
             }
            else
            {
                return view('user.payment.bank',compact('studid','schid','banks','schedule'));   
            }
        }
        else
        {
            if($pending)
            {
            return redirect('/user_timetable')->with('error', 'sorry, you have pending payment status for this schedule');
            }
            else
            {
                return view('user.payment.bank',compact('studid','schid','banks','schedule'));
            }
        }
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


    }
}

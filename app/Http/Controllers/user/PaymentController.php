<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Account;
use App\Models\User;
use App\Models\Bank;
use App\Models\Schedule;
use Carbon\Carbon;
class paymentController extends Controller
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
        $payments=Payment::where('student_id','LIKE',Auth::user()->id)->get();
        return view('user.payment.index',compact('payments'));
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
        $bid=$request->get('bid');
        $account=Account::where('bank_id','LIKE',$bid)->first();
       if($account){
        
        $num=$request->get('num');
        $studid=$request->get('studid');
        $schid=$request->get('schid');
        $schedule=Schedule::where('id','LIKE',$schid)->first();
        $code=$request->get('code');
        $payment=Payment::where('tfp_code','LIKE',$code)->first();
        if($num==2){
            if($payment){
                return redirect('/user_payment')->with('error', 'This transaction code is allready registered, please hold on till we check it.');
            }
            else{
                $payment = new Payment([
                    'student_id' => $request->get('studid'),
                    'schedule_id' => $request->get('schid'),
                    'account_id' => $request->get('accid'),
                    'tfp_code'=>$request->get('code'),
                    'status' => 'pending...',
        
               ]);
               $payment->save();
                return redirect('/user_payment')->with('success', 'Created successfuly');
            }
            
        }
        else{
            
            return view('user.payment.create',compact('code','studid','schid','schedule','account'));
        }
       }
       else{
        return redirect('/user_schedule')->with('error', 'Sorry use another bank');

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
        $payment=Payment::find($id);
        $payment->status='paid';
        $payment->save();
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
    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Payment::where("tfp_code", "=", $code)->first());
  
        return $code;
 
    }
}

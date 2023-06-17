<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Bank;
use App\Models\User;


class accountController extends Controller
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
        $accounts=Account::all();
        return view('admin.account.index',compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $staffs=User::where('user_role','LIKE',2)->get();
        $banks=Bank::all();
        return view('admin.account.create',compact('banks','staffs'));
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
        $accounts=Account::where('staff_id','LIKE', $request->get('sid'))->where('bank_id','LIKE', $request->get('bid'))->first();
        if($accounts){
            return redirect('/account')->with('error', 'This is already registed'); 
        }
        else{
            $account = new Account([
                'staff_id' => $request->get('sid'),
                'bank_id' => $request->get('bid'),
                'account_no' => $request->get('acc'),
           ]);
           $account->save();
            return redirect('/account')->with('success', 'Created successfuly'); 
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
        $staffs=User::where('user_role','LIKE',2)->get();
        $banks=Bank::where('id','LIKE',$id)->get();
        return view('admin.account.create',compact('banks','staffs'));
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
        $staffs=User::where('user_role','LIKE',2)->get();
        $banks=Bank::all();
        $account=Account::find($id); 
        return view('admin.account.edit',compact('account','staffs','banks'));
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
        $account=Account::find($id); 
        $account->staff_id=$request->get('sid');
        $account->bank_id=$request->get('bid');
        $account->account_no=$request->get('acc');
       $account->save();
        return redirect('/account')->with('success', 'Updated successfuly');
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
        $account=Account::find($id); 
        $account->delete();
        return redirect('/account')->with('success', 'Deleted successfuly');


    }
}

<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Language;
use App\Models\AbilityInArt;
use App\Models\Participation;
use App\Models\Profession;
use App\Models\SpecialAbility;
use App\Models\Section;
use App\Models\College;
class UserController extends Controller
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
        $users=User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            return view('admin.user.create');
        }
        public function formOne($id)  
       {
            $user=User::where('code','LIKE',$id)->first();
            $colleges=College::all();
            return view('admin.user.form1',compact('user','colleges'));
        }
        public function formTwo($id){
            $user=User::find($id);
            $languages=Language::all();
            $arts=AbilityInArt::all();
            $participations=Participation::all();
            $professions=Profession::all();
            $specials=SpecialAbility::all();
            return view('admin.user.form2',compact('user','languages','arts','participations','specials','professions'));
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
        
		$request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'dob' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       $imageName = time().'.'.$request->image->extension();  
       $request->image->move(public_path('images'), $imageName);

       $code=$this->generateUniqueCode();
        $user = new User([
            'fname' => $request->get('fname'),
            'mname' => $request->get('mname'),
            'lname' => $request->get('lname'),
            'gender' => $request->get('gender'),
            'mobile' => $request->get('mobile'),
            'dob' => $request->get('dob'),
            'user_role' => $request->get('role'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'code'=>$code,
            'photo' => $imageName,
       ]);
       $user->save();
        return redirect('/access/form1/'.$code)->with('success', 'Created successfuly');
       
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
        $user=User::find($id);
        $code=$user->code;
        if($user->height==null and $user->blood_type==null and $user->current_job==null and 
        $user->skin_color==null and $user->religion	==null and $user->old_address==null and $user->new_address==null){
            return redirect('/access/form1/'.$code)->with('error', 'Please fill the form');
        }
        elseif($user->language==null and $user->profession==null and $user->participation==null and 
        $user->special_ability==null and $user->ability_in_art==null){
            return redirect('access/form2/'.$id)->with('error', 'Please fill the form');
        }
        else{
            $languages=Language::all();
            $arts=AbilityInArt::all();
            $participations=Participation::all();
            $professions=Profession::all();
            $specials=SpecialAbility::all();
            $colleges=College::all();
            return view('admin.user.edit',compact('colleges','user','languages','arts','participations','specials','professions'));
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
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $num=$request->get('num');
        $user=User::find($id);
        if($num==1){
            $user->fname=$request->get('fname');
            $user->mname=$request->get('mname');
            $user->lname=$request->get('lname');
            $user->gender=$request->get('gender');
            $user->mobile=$request->get('mobile');
            $user->dob=$request->get('dob');
            $user->email=$request->get('email');
            $user->photo=$request->get('photo');
            $user->save();
            return redirect('access/create');
        }
        elseif($num==2){
            $user->height=$request->get('height');
            $user->current_job=$request->get('cj');
            $user->skin_color=$request->get('sc');
            $user->special_identity=$request->get('ss');
            $user->blood_type=$request->get('bt');
            $user->religion=$request->get('religion');
            $user->new_address=$request->get('na');
            $user->old_address=$request->get('oa');
            $user->college_id=$request->get('college');
            $user->save();
            return redirect('access/form2/'.$id);
        }
        elseif($num==3){
        $user=User::find($id);
        $user->language =$request->get('lg');
        $user->profession=$request->get('pro');
        $user->special_ability=$request->get('spa');
        $user->ability_in_art=$request->get('art');
        $user->participation=$request->get('pi');
        $user->save();
        return redirect('access');
        }
        elseif($num==4){
            $imageName = '';
    if ($request->hasFile('image')) {
      $imageName = time() . '.' . $request->image->extension();
	$request->image->move(public_path('images'), $imageName);
      if ($user->image_name) {
        Storage::delete('public/images' . $user->photo);
      }
    } else {
      $imageName = $user->photo;
    }
            $user->fname=$request->get('fname');
            $user->mname=$request->get('mname');
            $user->lname=$request->get('lname');
            $user->gender=$request->get('gender');
            $user->mobile=$request->get('mobile');
            $user->dob=$request->get('dob');
            $user->email=$request->get('email');
            $user->photo=$imageName;
            $user->college_id=$request->get('college');
            $user->height=$request->get('height');
            $user->current_job=$request->get('cj');
            $user->skin_color=$request->get('sc');
            $user->special_identity=$request->get('si');
            $user->blood_type=$request->get('bt');
            $user->religion=$request->get('religion');
            $user->new_address=$request->get('ca');
            $user->old_address=$request->get('oa');
            $user->user_role=$request->get('role');
            $user->language =$request->get('lg');
            $user->profession=$request->get('pro');
            $user->special_ability=$request->get('spa');
            $user->ability_in_art=$request->get('art');
            $user->participation=$request->get('pi');
            $user->save(); 
        return redirect('access');
        }
         else{
            return redirect('access'); 
         }
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
        $user=User::find($id);
        $user->delete();
        return back();
    }

    public function language(Request $request){
        //language
        $language = new Language([
            'name' => $request->get('name'),
       ]);
       $language->save();
       return back();
    }

    public function profession(Request $request){
        //language
        $profession = new Profession([
            'name' => $request->get('name'),
       ]);
       $profession->save();
       return back();    }

    public function specialAbility(Request $request){
        //language
        $specialAbility = new SpecialAbility([
            'name' => $request->get('name'),
       ]);
       $specialAbility->save();
       return back();  
      }

    public function art(Request $request){
        //language
        $art = new AbilityInArt([
            'name' => $request->get('name'),
       ]);
       $art->save();
       return back();
        }

    public function participation(Request $request){
        //language
        $participation = new Participation([
            'name' => $request->get('name'),
       ]);
       $participation->save();
       return back();
        }

    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000000000, 999999999999);
        } while (User::where("code", "=", $code)->first());
  
        return $code;
 
    }
}

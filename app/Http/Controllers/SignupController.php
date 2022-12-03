<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login.signup');
    }

    function adddata(Request $request)
    {
    $validator= $this->validate($request, [
        'email'   => 'required|email'
     ]);
     $email=$request->post('email');
     $results = DB::select('select * from users where email = ?', array($email));
     if($results)
     {
        // return back()->with('error', 'Wrong Login Details');
        return back()->with('error', 'Email already registered');
     }
     else{
        if($request->post('password') == $request->post('conpassword')){
            User::insert([
                'name'  => $request->post('name'),
                'email'  => $request->post('email'),
                'password' =>  Hash::make($request->post('password'))
            ]);
            return back()->with('error', 'Signup successfull.');
            // return back()->with( 'Signup successfull.');
    
         }else{
            return back()->with('error', 'password and confirm password need to be same');
         }
     }
     
    
    }

    // function checklogin(Request $request)
    // {
    //  $this->validate($request, [
    //   'email'   => 'required|email',
    //   'password'  => 'required|alphaNum|min:3'
    //  ]);

    //  $user_data = array(
    //   'email'  => $request->get('email'),
    //   'password' => $request->get('password')
    //  );

    //  if(Auth::attempt($user_data))
    //  {
    //   return redirect('/login/successlogin');
    //  }
    //  else
    //  {
    //   return back()->with('error', 'Wrong Login Details');
    //  }

    // }

    // function successlogin()
    // {
    //  return view('login.successlogin');
    // }

    // function logout()
    // {
    //  Auth::logout();
    //  return redirect('/login');
    // }

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
    }
}
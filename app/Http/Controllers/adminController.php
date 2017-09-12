<?php

namespace App\Http\Controllers;
use App\login;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    /*
     * view admin dashboard
     */
    public function index()
    {
       // check if user already logined and no need to login again
       if (Session::has('userName')&&Session::has('password')) 
       {
          return view('index'); 
       }
          return redirect('/'); // go to login
    }
    /*
     * view form create account
     */
    public function create()
    {
        // check if user already logined and no need to login again
       if (Session::has('userName')&&Session::has('password')) 
       {
          return view('createNewAccount.formcreate'); 
       }
          return redirect('/'); // go to login
    }
    
    /*
      Create New Account
    **/
    public function addNewAccount(Request $request)
    {   
        // validation
    	$this->validate($request,[
            'email' => 'unique:usersinfor',
            'phonenumber' => 'unique:usersinfor',
    	]);
        
        // Insert Data To database 
       $usersinfor = new login;
       $usersinfor->firstName = $request->firstname;
       $usersinfor->lastName  = $request->lastname;
       $usersinfor->userName  = $request->username;
       $usersinfor->email     = $request->email;
       $usersinfor->phoneNumber = $request->phonenumber;
       $usersinfor->password  = Hash::make($request->password);
                                
       $re = $usersinfor->save();
       // End of Insert Data
      
       if($re){
           Session::flash('alert-success', 'Create successfull!');
       }else{
           Session::flash('alert-warning', 'Create is not success!');
       }
       return redirect('create');
    }
    
    /*
     * view login form
     */
    public function login()
    {
        // check if user already logined and no need to login again
       if (Session::has('userName')&&Session::has('password')) 
       {
          return view('index'); 
       }
          return view('loginForm.login');
    }
    /*
     * process of login form
     */
    public function loginprocess(Request $request)
    {
        $username   = $request->username;
        $password   = $request->password;
        $usersinfor = \App\login::all(); //get all data from usersinfor table
        
        // check if email and password is have in database
        foreach ($usersinfor as $usersinfors) {
           $userNameDB = $usersinfors->userName;
           $passDB     = $usersinfors->password;
           if(Hash::check($password, $passDB)&&($username == $userNameDB))
           {
               $request->session()->put('userName',$username);
               $request->session()->put('password',$password);
               return redirect('admin'); // Go to Dashboard
           }else{
               Session::flash('alert-warning', 'Incorrect Username or Password!');
           }
        }
        return redirect('login');
    }
    
    // Logout 
    public function logout()
    {
        Session::forget('userName');
        Session::forget('password');
        return redirect('/'); // redirect to login form
    }
}

<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use Illuminate\Http\Request;
use Input;
use Auth;
use Validator;
use Redirect;
use Hash;
use App\Signature;

use App\Http\Requests;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index() {
        return view('home');
    }
    
    public function register() {
        return view('users.register');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'first_name' =>'required',
            'last_name' => 'required' ,
            'password' => 'required|min:3'
        ]);
        
        //
        
        $input = $request->all();
        
            $file = Input::file('picture_url');
            //if valid, move to public path and add to input data array
            if($file != null && $file->isValid())
            {
                $input['picture_url'] = 'files/'.time().$file->getClientOriginalName();
                $file->move(public_path('files/'), $input['picture_url']);
            }

        User::create($input);
        
        $names = Input::get('last_name');
        Session::flash('flash_message', 'Congratulations '. $names. '. Staff successfully added!!');
        
        return redirect()->back();
    
    
    }

    public function login() {
        return view('users.login');
    }
    
    public function authenticate()
    {
        
        $valid = [
            'title' => 'required',
            'password' => 'required'
        ];
        
        $validator = Validator::make(Input::all(), $valid);
        
        if($validator->fails()){
            return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
        }else{
            
        $userdata = [
            'title' => Input::get('title'),
            'password' => Input::get('password')
        ];
        
        if (Auth::attempt($userdata)){
            
            return Redirect::to('signature');
        }else {
            return redirect()->back();
        }
       
        }
    }
    
    public function signature(){
        return view('users.signature');
    }
    
    public function signed(Request $request){
        $input = $request->all();
        
        Signature::create($input);
        
        
        Session::flash('flash_message', 'You have Signed in for today. Have a nice day. Please logout!!');
        
        return redirect()->back();

        
    }
    
    public function logout()
{
    Auth::logout(); // log the user out of our application
    return Redirect::to('/'); // redirect the user to the login screen
}
    
    
}
;

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\subscription_admin;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        // dd('hh');
        // dd($request);
        // $request->validate([
        //     'admin_email' => 'required',
        //     'admin_password' => 'required',
        // ]);
        $email=$request->admin_email;
        $password=$request->admin_password;
        $loginData=subscription_admin::where('admin_email', $email)->first();
        if(!$loginData || !Hash::check($request->admin_password, $loginData->admin_password))
        {
           
            return redirect("login")->with('error','Login details are not valid');
         } 
         else 
         {
            $subscription_admin = new subscription_admin();
            $subscription_admin->id = $loginData->id;
            $subscription_admin->admin_email = $loginData->admin_email;
            $subscription_admin->admin_password = $loginData->admin_password;
            $subscription_admin->company_name = $loginData->company_name;
            Auth::login($subscription_admin);
            return redirect()->intended('dashboard')->with('success','You are successfully logged in !');
         }
        
  
        // $credentials = $request->only('admin_email', 'admin_password');
        // $credentials['admin_password'] = sha1($credentials['admin_password']);
        // dd(Auth::attempt($credentials));
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('dashboard');
        // }
  
        // return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        // dd($request);
        // $request->validate([
        //     'company_name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',
        // ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        // dd($data);
      return subscription_admin::create([
        'company_name' => $data['company_name'],
        'admin_email' => $data['admin_email'],
        'admin_password' => Hash::make($data['admin_password'])
      ]);
    }    
    
    public function dashboard()
    {
    //    dd(Auth::user());
        // if(Auth::check()){
            return view('dashboard');
        // }
  
        // return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
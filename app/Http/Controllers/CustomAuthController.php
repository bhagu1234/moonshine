<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
// use App\Models\subscription_admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email',$email)->first();
         $today=date('Y-m-d');
        if($user !=null)
        {
            $pas_check= Hash::check($password, $user->password);
            if($pas_check==true)
            {
                if ($user) 
                {
                    $userModel = new User();
                    $userModel->id = $user->id;
                    $userModel->email = $user->email;
                    $userModel->mobile = $user->mobile;
                    $userModel->password = $user->password;
                    $userModel->first_name = $user->first_name;
                    Auth::login($userModel); 
                }
                if($user->plan_end<$today)
                {
                    return redirect()->route("admin.subscription")->withSuccess('You are successfully loggedin!'); 
                }
                else
                {
                    return redirect()->route("admin.dashboard")->withSuccess('You are successfully loggedin!'); 
                }
                
            }
        }
        // Session::flash('error', 'Your Details are not matched!');
        return back()->withError('Your Details are not matched!');;
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        // dd($request);
        $validated = $request->validate([
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
        ]);
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        if($user==true)
        {
            $email = $request->email;
            $password = $request->password;
            $user_data = User::where('email',$email)->first();
            $userModel = new User();
            $userModel->id = $user_data->id;
            $userModel->email = $user_data->email;
            $user->mobile = $request->mobile;
            $userModel->password = $user_data->password;
            $userModel->first_name = $user_data->first_name;
            Auth::login($userModel);
            return redirect()->route("admin.subscription")->withSuccess('You are successfully registered !'); 
        }
        // Session::flash('error', 'Something went wrong!');
        return back()->withError('Something went wrong!');
       
        
    }

    public function subscription(Request $request)
    {
        // dd(Auth::user());
        return view('auth.subscription');
    }    
    
    public function dashboard()
    {
        if(Auth::check())
        {
            $check_sub=Auth::user();
            $today=date('Y-m-d');
            if($check_sub->plan_end>$today)
            {
                return view('dashboard');
            }
            else
            {
                return redirect()->route("admin.subscription");
            }
           
        }
        return redirect("login");
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
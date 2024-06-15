<?php
namespace App\Http\Controllers;
use Auth;
use Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Apps;
use App\Models\UserModel;
use App\Models\User;
use App\Models\LogModel;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->user     = new UserModel();
        $this->log      = new LogModel();
    }
    
    public function indexRender()
    {
        return view('login');
    }
    
    public function loginHandle(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'email'         => 'required',
            'password'      => 'required',
        ]);
        
        // Get user
        $isValid    = true;
        
        $user       = $this->user->getByEmail($input['email']);
        
        // If user not found show error
        if (!$user)
        {
            $isValid = false;
        }

        // Check hash
        if ($isValid)
        {
            $isValid = Hash::check($input['password'], $user->password);
        }

        if (!$isValid)
        {
            $request
                ->session()
                ->flash('login-error', 'login-error');

            return back()->withInput($request->except('password'));
        }

        $data = [
            'email'     => $input['email'],
            'password'  => $input['password'],
        ];
        
        $email = $input['email'];
        
        $user = $this->user->getByEmailOrUsername($email);
        
        Session::put('id', $user->id);
        Session::put('name', $user->name);
        Session::put('email', $user->email);
        
        $dataLog = [
            'user_id'       => $user->id,
            'email'         => $user->email,
        ];
        
        $action = 'Login to Panel';
        $this->log->record($user->id, $action, $dataLog, $user->id);
        
        return redirect(env('APP_URL').''.env('APP_ADMIN_URL'));
        
        if (Auth::attempt($data)) 
        {
            
            
        }
        else 
        {
            return redirect()->route('login')->with('failed', 'Incorrect Email or Password');
        }
    }
    public function appsHandler($id)
    {
        $id = base64_decode($id);
        $apps = Apps::find($id);
        if (!empty($apps)) {
            Session::put('apps_id', $id);
            Session::put('hcode', $apps->hcode);
            return Redirect::to($apps->hcode);
        }
        return Redirect()->back();//->with('success', 'your message,here');
    }
    public function logoutRender()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
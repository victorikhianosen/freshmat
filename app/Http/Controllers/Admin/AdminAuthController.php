<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\WebSiteMail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:15'
        ]);

        // return Hash::make($credentials['password']);

        $admin = Admin::where('email', $credentials['email'])->first();

        if (!$admin) {
            return back()->with('error', 'Incorrect credentials');
        } elseif (!Hash::check($credentials['password'], $admin->password)) {
            return back()->with('error', 'Incorrect Password');
        } elseif (Auth::guard('isadmin')->attempt($credentials)) {
            $admin->status = 'active';
            $admin->save();
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('success', 'Login successful');
        } else {
            return back()->with('error', 'Login attempt failed');

        }

    }

    public function showRegister()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => 'required|confirmed|min:4|max:15'
        ]);

        $credentials['password'] = Hash::make($credentials['password']);
        Admin::create($credentials);

        // $subject = 'Admin Registation';
        // $body = "Super Admin will activate your account soon.";

        // Mail::to($credentials['email'])->send(new WebSiteMail($subject, $body));
        return redirect()->route('admin.login')->with('success', 'Account create successful');
    }

    public function logout(Request $request)
    {
        Auth::guard('isadmin')->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('admin.login')->with('success', 'See you soon...');
    }

    public function dashboard()
    {
        return view('admin.dashboard.index');
    }


    public function createChangePassword()
    {
        return view('admin.auth.change_password');
    }

    public function changePassword(Request $request)
    {

        // $credentials = $request->all();

        $credentials = $request->validate([
            'email' => 'required',
            'current_password' => 'required',
            'password' => 'required|confirmed|min:4|max:15'
        ]);

        $admin = Admin::where('email', $credentials['email'])->first();

        if (!$admin) {
            return back()->with('error', 'Incorrect credentials');
        } elseif (!Hash::check($credentials['current_password'], $admin->password)) {
            return back()->with('error', 'Incorrect Password');
        }
        $admin->password = Hash::make($credentials['password']);
        $admin->status = 'active';
        $admin->save();
        return redirect()->route('admin.change.password')->with('success', 'Password Change Successfully');
    }
}

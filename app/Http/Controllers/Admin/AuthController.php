<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\AdminUser;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(auth('admin')->attempt($data))
        {
            return redirect(route('admin.dashboard'));
        }   

        return view('auth.login');
    }

    public function logout(Request $request)
    {
        auth('admin')->logout($request);

        return redirect(route('admin.login'));
    }
}

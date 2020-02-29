<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions/create');
    }

    public function store(Request $request)
    {
        $credentials  = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required|min:6'
        ]);
        if (Auth::attempt($credentials))
        {
            session()->flash('success', '欢迎您回来');
            return redirect()->route('users.show', [Auth::user()]);
        }else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }

        return true;
    }

    public function destroy()
    {

    }
}

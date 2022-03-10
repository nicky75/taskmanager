<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Login route.
     *
     * @return \Illuminate\Http\Response
     */
  
  public function login()
  {
    if (!Auth::check()) {
      return view('auth.login');
    } else {
      return redirect()->intended('project');
    }
  }

  public function authenticate(Request $request)
  {
    $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
      return redirect()->intended('project');
    }
    return back()->withInput()->with('errors', ['Invalid login']);
    // return redirect('login')->with('error', 'Invalid login');
  }

  public function logout()
  {
    Auth::logout();

    return redirect('login');
  }
}

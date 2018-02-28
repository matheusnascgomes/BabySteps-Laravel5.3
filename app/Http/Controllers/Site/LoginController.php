<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('site.login');
    }

    public function signIn(Request $req)
    {
      $data = $req->all();
      if (Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])) {
        return redirect()->route('admin.index');
      } else {
        return redirect()->route('site.login');
      }
    }

    public function logout()
    {
      Auth::logout();
      return redirect()->route('site.login');
    }
}

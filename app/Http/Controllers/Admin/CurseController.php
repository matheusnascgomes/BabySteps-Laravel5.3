<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurseController extends Controller
{
    public function index()
    {
      return view('courses.index');
    }
}

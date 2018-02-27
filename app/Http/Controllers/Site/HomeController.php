<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class HomeController extends Controller
{

  public function index()
  {
    $courses = Curso::all();

    return view('site.home', compact('courses'));
  }
}

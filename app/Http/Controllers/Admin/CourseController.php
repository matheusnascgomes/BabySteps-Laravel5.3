<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CourseController extends Controller
{
    public function index()
    {
      $registers = Curso::all();
      return view('admin.courses.index',compact('registers'));
    }
}

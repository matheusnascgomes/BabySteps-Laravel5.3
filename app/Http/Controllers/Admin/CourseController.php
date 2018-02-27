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

    public function add()
    {
      return view('admin.courses.add');
    }

    public function save(Request $req)
    {

      $data = $req->all();

      (isset($data['published'])) ? $data['published'] = 'sim' : $data['published'] = 'nao' ;

      if($req->hasFile('image')){
        $image = $req->file('image');
        $num = rand(1111,9999);
        $dir = 'img/courses';
        $ex = $image->guessClientExtension();
        $ImageName = 'image_'.$num.".".$ex;
        $image->move($dir, $ImageName);
        $data['image'] = $dir."/".$ImageName;
      }

      Curso::create($data);

      return redirect()->route('admin.courses');
    }

    public function updateShow(Request $req, $id)
    {
        $registers = Curso::find($id);
        return view('admin.courses.update', compact('registers'));
    }

    public function update(Request $req, $id)
    {
      $data = $req->all();

      (isset($data['published'])) ? $data['published'] = 'sim' : $data['published'] = 'nao' ;

      if($req->hasFile('image')){
        $image = $req->file('image');
        $num = rand(1111,9999);
        $dir = 'img/courses';
        $ex = $image->guessClientExtension();
        $ImageName = 'image_'.$num.".".$ex;
        $image->move($dir, $ImageName);
        $data['image'] = $dir."/".$ImageName;
      }

      Curso::find($id)->update($data);

      return redirect()->route('admin.courses');
    }
}

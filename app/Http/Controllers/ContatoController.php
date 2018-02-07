<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
  public function publish($id = null)
  {
    $contacts = [
      [
        "name"=>"Matheus",
        "phone"=>"81999860276",
        "age"=>22
      ],
      [
        "name"=>"Larisse",
        "phone"=>"81999860276",
        "age"=>24
      ],
      [
        "name"=>"Caminha",
        "phone"=>"81999860276",
        "age"=>52
      ]
    ];
    return view('contact.index', compact('contacts'));
    // return "This is the publish from Contato Controller / Paramiter = " . $id;
  }

  public function insert(Request $req)
  {
    return 'This is the insert from Contato Controller ' . $req['mensage'];
  }

  public function update(Request $req)
  {
    return 'This is the update from Contato Controller. Current Result = ' . $req['mensage'];
  }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  public static function list(){

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

    return $contacts;
  }
}

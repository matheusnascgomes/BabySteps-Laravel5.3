<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $fillable = [
      'title', 'description', 'value', 'image', 'published'
  ];
}

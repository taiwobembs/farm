<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supply;
use App\Models\Responsibilities;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'age',
      'email',
      'telephone',
      'sex',
    ];
}

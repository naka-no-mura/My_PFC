<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'name'
    ];

    protected $guarded = [
      'id',
      'created_at',
      'updated_at'
    ];
}

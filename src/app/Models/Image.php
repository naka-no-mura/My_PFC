<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
      'user_id',
      'name',
    ];

    protected $guarded = [
      'id',
      'created_at',
      'updated_at'
    ];

    /**
     * ユーザー
     *
     * @return void
     */
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}

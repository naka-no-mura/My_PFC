<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodIcon extends Model
{
    use HasFactory;

    protected $fillable = [
      'path',
    ];

    protected $guarded = [
      'id',
      'created_at',
      'updated_at'
    ];

    /**
     * フードアイコンを持っているフード
     */
    public function foods()
    {
      return $this->belongsToMany(Food::class, 'food_food_icon', 'food_icon_id', 'food_id')
                  ->withTimestamps();
    }
}

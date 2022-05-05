<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = [
      'user_id',
      'name',
      'protein',
      'fat',
      'carbohydrate',
      'food_icon_id'
    ];

    protected $guarded = [
      'id',
      'created_at',
      'updated_at'
    ];

    /**
     * food履歴
     */
    public function foodHistories()
    {
      return $this->hasMany(FoodHistory::class);
    }

    /**
     * foodを持っているフードアイコン
     */
    public function foodIcons()
    {
      return $this->belongsToMany(FoodIcon::class, 'food_food_icon', 'food_id', 'food_icon_id')
                  ->withTimestamps();
    }
}

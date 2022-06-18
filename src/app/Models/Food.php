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
      'carbohydrate'
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
}

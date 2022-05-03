<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'food_id',
        'count',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    /**
     * food情報
     */
    public function food()
    {
      return $this->belongsTo(Food::class);
    }
}

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

    /**
     * 各トレーニング履歴
     *
     * @return void
     */
    public function trainingHistory()
    {
      return $this->hasMany(TrainingHistory::class);
    }

    /**
     * ユーザーのトレーニング
     *
     * @return void
     */
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}

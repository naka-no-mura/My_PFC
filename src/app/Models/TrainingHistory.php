<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'training_id',
        'weight',
        'repetition',
        'set',
        'is_done'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    /**
     * トレーニング履歴
     *
     * @return void
     */
    public function training()
    {
      return $this->belongsTo(Training::class);
    }
}

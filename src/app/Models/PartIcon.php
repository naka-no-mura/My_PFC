<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartIcon extends Model
{
    use HasFactory;

    /**
     * トレーニングアイコンに紐づくトレーニングパート情報を取得
     *
     * @return array
     */
    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}

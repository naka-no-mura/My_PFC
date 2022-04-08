<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    /**
     * トレーニングパートに紐づくアイコンを取得
     *
     * @return array
     */
    public function partIcon()
    {
        return $this->hasOne(PartIcon::class);
    }
}

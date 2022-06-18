<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guarded = [
        'id',
    ];

    public static $rules = [
        'name'     => 'required',
        'email'    => 'email|required',
        'password' => 'required'
    ];

    /**
     * トレーニング項目
     *
     * @return void
     */
    public function training()
    {
      return $this->hasMany(Training::class);
    }

    /**
     * トレーニングパート別履歴
     *
     * @return void
     */
    public function partHistory()
    {
      return $this->hasMany(PartHistory::class);
    }
}

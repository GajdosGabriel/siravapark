<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles, Notifiable, Impersonate, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'referral_id', 'name', 'surname', 'email', 'password', 'phone_code', 'phone', 'country', 'company', 'url', 'status', 'step', 'priority' , 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute() {
        return $this->name . ' ' . $this->surname;
    }

    public function lastPages() {
        return $this->hasMany(UserActivity::class)
            ->whereNotIn('activity_id', [1, 2])
            ->orderBy('id', 'desc')
            ->limit(10);
    }

    public function activities() {
        return $this->hasMany(UserActivity::class);
    }




}

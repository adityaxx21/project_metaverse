<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_reg extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

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

    public function Roles()
    {
        return $this->belongsTo(user_roles::class);
    }

    
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';
}

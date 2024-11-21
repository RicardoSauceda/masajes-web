<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu',
        'route',
        'module_id',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function module()
    {
        return $this->hasOne(Module::class);
    }

}

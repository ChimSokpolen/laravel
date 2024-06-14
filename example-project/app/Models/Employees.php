<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    public function new_roles(): HasOne
    {
        return $this->hasOne(new_roles::class);
    }
}

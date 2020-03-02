<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    protected $table='statuses';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

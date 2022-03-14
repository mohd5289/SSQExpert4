<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Institution extends Authenticable
{
    use HasFactory;
    public function getSSQs()
    {
        return $this->hasMany(SSQ::class);
    }
}

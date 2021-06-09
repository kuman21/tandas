<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Number;

class Client extends Model
{
    use HasFactory;

    /**
     * The numbers that belong to the client.
     */
    public function numbers()
    {
        return $this->belongsToMany(Number::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Number,Client};

class Payment extends Model
{
    use HasFactory;

    /**
     * Get the number that owns the payment.
     */
    public function number()
    {
        return $this->belongsTo(Number::class);
    }

    /**
     * Get the client that owns the payment.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

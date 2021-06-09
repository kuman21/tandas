<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User,Number};

class Saving extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'numbers',
        'periodicity',
        'amount',
        'shared',
        'start',
    ];

    /**
     * Get the user that owns the saving.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the numbers for the saving.
     */
    public function numbers()
    {
        return $this->hasMany(Number::class);
    }
}

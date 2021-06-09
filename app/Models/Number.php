<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Saving,Client};

class Number extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'saving_id',
        'date_payment',
    ];

    /**
     * Get the saving that owns the number.
     */
    public function saving()
    {
        return $this->belongsTo(Saving::class);
    }

    /**
     * The clients that belong to the number.
     */
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}

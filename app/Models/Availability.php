<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Availability extends Model
{
    use HasFactory;


    protected $fillable = [
        'consultant_id',
        'date',
        'start',
        'end',
    ];

    public function consultant()
    {
        return $this->belongsTo(User::class, 'consultant_id');
    }
}

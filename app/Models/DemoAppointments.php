<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemoAppointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'company',
        'date',
        'time_slot',
        'consultant_id',
    ];

    public function consultant()
    {
        return $this->belongsTo(User::class);
    }
}

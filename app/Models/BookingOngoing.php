<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingOngoing extends Model
{
    use HasFactory;
    protected $table = 'bookings_ongoing';

    protected $fillable = ['stripe_session_id', 'user_id', 'offering_id', 'name', 'star'];
}

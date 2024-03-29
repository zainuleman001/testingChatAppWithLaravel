<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    function sender() {
        return $this->belongsTo(User::class, 'sender_id');
    }
    function receiver() {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requesting extends Model
{
    protected $fillable = ['adress', 'time', 'payment', 'status', 'user_id'];

    public function user(){
        $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = [
        "name",  "phone_number", "email", "age", "user_id", "profile_picture"
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

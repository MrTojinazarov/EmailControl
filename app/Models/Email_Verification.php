<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email_Verification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

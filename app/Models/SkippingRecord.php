<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkippingRecord extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'jumps', 'date'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

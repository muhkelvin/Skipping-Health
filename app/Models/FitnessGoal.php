<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessGoal extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'daily_target', 'weekly_target'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthImpact extends Model
{
    use HasFactory;

    protected $fillable = [
        'jump_count', 'calories_burned', 'heart_health', 'muscle_strength', 'flexibility','user_id','recommendations'
    ];

}

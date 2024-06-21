<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'round_id',
        'level',
        'correct',
        'stop',
        'err',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

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

    public function round()
    {
        return $this->belongsTo(Round::class);
    }

    function listLevelByRound($id_round) {
       return $this->where('round_id', '=', $id_round)->first();
        
    }
}

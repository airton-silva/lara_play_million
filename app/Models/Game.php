<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'level_id',
        'value_gain',
        'finished',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function gamerPending($idUser)
    {
        $results = $this->where('user_id', '=', $idUser)->where('finished', '=', 'N' )->first();
        return $results;
    } 
}

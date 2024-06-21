<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'level_id',
        'question',
        'response',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function alternatives()
    {
        return $this->hasOne(Alternative::class);
    }
}

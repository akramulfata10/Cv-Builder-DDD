<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yatim extends Model {
    use HasFactory;

    protected $fillable = ['uuid', 'name', 'user_id'];

    public function owner(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
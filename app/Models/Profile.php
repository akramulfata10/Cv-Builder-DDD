<?php

declare (strict_types = 1);

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    use HasFactory, HasUuid;

    protected $fillable = ['uuid', 'bio', 'user_id'];

    public function owner() {
        return $this->BelongsTo(User::class, 'user_id');
    }

    public function experiences() {
        return $this->hasMany(Experience::class, 'profile_id');
    }

}
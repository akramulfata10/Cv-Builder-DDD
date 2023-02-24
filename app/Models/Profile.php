<?php

declare (strict_types = 1);

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    use HasUuid;
    use HasFactory;

    protected $fillable = ['uuid', 'bio', 'user_id'];

    public function owner(): BelongsTo {
        return $this->belongsTo(
            related:User::class,
            foreignKey:'user_id',
        );
    }

}
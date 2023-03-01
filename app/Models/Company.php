<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    use HasUuid;
    use HasFactory;

    protected $fillable = ['uuid', 'name', 'website', 'verified'];

    protected $casts = ['verified' => 'boolean'];

}
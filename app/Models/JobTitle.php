<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model {
    use HasFactory;

    /**
     * @var bool
     */
    public $timetamps = false;

    /**
     * @var array<int,string>
     */
    protected $fillable = ['name'];

    // Relationships

    // Helper Methods
}
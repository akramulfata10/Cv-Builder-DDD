<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model {
    use HasUuid;
    use HasFactory;

    protected $fillable = [
        'uuid',
        'description',
        'çurrent',
        'profile_id',
        'job_title_id',
        'company_id',
        'started_at',
        'finished_at',
    ];

    protected $casts = [
        'current' => 'boolean',
        'started_at' => 'date',
        'finished_at' => 'date',
    ];

    public function profile() {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function jobTitle() {
        return $this->belongsTo(JobTitle::class, 'job_title_id');
    }

    public function company() {
        return $this->belongsTo(Company::class, 'company_id');
    }

}
<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid {
    /**
     * @return void
     */
    public static function bootHasUuid() {
        static::creating(
            fn(Model $model) => $model->uuid = Str::uuid()->toString(),
        );
    }
}
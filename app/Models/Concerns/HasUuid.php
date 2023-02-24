<?php 


declare(strict_types=1);

namespace App\Models\Concerns;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

/**
 * @return void
 */
trait HasUuid
{
    public static function bootHasUuid(): void {
        static::creating(
            fn(Model $model) => 
            $model->uuid = Str::uuid()->toString(),
        )
    }
}
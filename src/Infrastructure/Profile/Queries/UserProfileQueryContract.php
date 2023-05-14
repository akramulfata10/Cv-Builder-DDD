<?php

declare (strict_types = 1);

namespace Infrastructure\Profile\Queries;

use Illuminate\Database\Eloquent\Model;

interface UserProfileQueryContract
{
    public function handle(Model $user): Model;
}
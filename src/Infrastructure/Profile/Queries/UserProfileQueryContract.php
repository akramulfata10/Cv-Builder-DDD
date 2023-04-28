<?php

declare (strict_types = 1);

namespace Infratructure\Profile\Queries;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

interface UserProfileQueryContract
{
    /**
     * @param int $user
     * @return Model
     */
    public function handle(Authenticatable $user): Model;
}

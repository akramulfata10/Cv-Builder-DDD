<?php

declare (strict_types = 1);

namespace Domains\Profile\Queries;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Infratructure\Profile\Queries\UserProfileQueryContract;

class UserProfileQueries implements UserProfileQueryContract
{
    public function handle(Model $user): Model
    {
        return Profile::query()->whereBelongsTo(
            related:$user,
            relationshipName:'owner',
        );
    }
}

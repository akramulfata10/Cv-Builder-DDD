<?php

namespace Domains\Profile\Actions;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Profile\Actions\UpdateProfileBioContract;

class UpdateProfileBio implements UpdateProfileBioContract
{
    public function handle(Model $profile, string | null $bio): void
    {
        $profile->update(
            attributes:['bio' => $bio],
        );
    }
}
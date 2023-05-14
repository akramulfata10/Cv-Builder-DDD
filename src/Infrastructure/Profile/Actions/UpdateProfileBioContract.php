<?php

namespace Infrastructure\Profile\Actions;

use Illuminate\Database\Eloquent\Model;

interface UpdateProfileBioContract
{
    public function handle(Model $profile, string $bio): void;
}
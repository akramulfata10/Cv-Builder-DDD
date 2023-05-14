<?php

declare (strict_types = 1);

namespace Domains\Profile\Providers;

use Domains\Profile\Actions\UpdateProfileBio;
use Domains\Profile\Queries\UserProfileQuery;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Profile\Actions\UpdateProfileBioContract;
use Infrastructure\Profile\Queries\UserProfileQueryContract;

class ProfileServiceProvider extends ServiceProvider
{

    /**
     * @var array<class-string,class-string>
     */

    public array $bindings = [
        UserProfileQueryContract::class => UserProfileQuery::class,
        UpdateProfileBioContract::class => UpdateProfileBio::class,
        // UpdateProfileBioContract::class => UpdateProfileBio::class,
    ];

    /**
     * @return void
     */

    public function boot(): void
    {
        //
    }

}
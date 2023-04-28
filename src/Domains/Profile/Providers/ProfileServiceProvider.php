<?php

declare (strict_types = 1);

namespace Domains\Profile\Providers;

use Domains\Profile\Queries\UserProfileQuery;
use Illuminate\Support\ServiceProvider;
use Infratructure\Profile\Queries\UserProfileQueryContract;

class ProfileServiceProvider extends ServiceProvider
{

    /**
     * @var array<class-string,class-string>
     */

    public array $bindings = [
        UserProfileQueryContract::class => UserProfileQuery::class,
    ];

    /**
     * @return void
     */

    public function boot(): void
    {
        //
    }

}

<?php

declare (strict_types = 1);

namespace App\Observers;

use App\Models\User;

class UserObserver {
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user): void {
        $user->profile()->create([]);
    }

}
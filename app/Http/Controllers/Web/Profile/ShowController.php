<?php

declare (strict_types = 1);

namespace App\Http\Controllers\Web\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Infratructure\Profile\Queries\UserProfileQueryContract;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     * @param  Request  $request    
     * @param Authenticatable $user
     * @param UserProfileQueryContract $query
     * @return View
     */
    public function __invoke(Request $request, Authenticatable $user): View
    {
        return view('app.profile.show', [
            'user' => $user,
            'profile' => $query->handle($user->id),
        ]);
    }
}
<?php

namespace App\Http\Controllers\Web\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;

class ShowController extends Controller {
    /**
     * Handle the incoming request.
     * @param Authenticatable $user
     * @param  \Illuminate\Http\Request  $request
     */
    public function __invoke(Request $request, Authenticatable $user) {
        return view('app.profile.show', [
            'user' => $user,
        ]);
    }
}
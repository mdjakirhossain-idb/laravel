<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    /**
     * toResponse
     *
     * @param  mixed $request
     * @return void
     */
    public function toResponse($request)
    {
        return redirect('/apps/dashboard');
    }
}

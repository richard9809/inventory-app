<?php

namespace App\HospitalContext\Middleware;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class HospitalContextMiddleware extends Middleware
{
    protected function authenticate($request, array $guards): void
    {
        $guardName = config('hospital-context.auth.guard');
        $guard = $this->auth->guard($guardName);

        if (!$guard->check()) {
            $this->unauthenticated($request, $guards);

            return;
        }

        $this->auth->shouldUse($guardName);

        $user = $guard->user();

        if ($user instanceof FilamentUser) {
            abort_if(!$user->canAccessFilament(), 403);

            return;
        }

        abort_if(config('app.env') !== 'local', 403);
    }

    protected function redirectTo($request): string
    {
        return route('hospital-context.auth.login');
    }
}

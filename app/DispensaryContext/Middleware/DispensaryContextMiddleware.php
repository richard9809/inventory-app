<?php

namespace App\DispensaryContext\Middleware;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class DispensaryContextMiddleware extends Middleware
{
    protected function authenticate($request, array $guards): void
    {
        $guardName = config('dispensary-context.auth.guard');
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
        return route('dispensary-context.auth.login');
    }
}

<?php

namespace App\Providers;

use Iotronlab\FilamentMultiGuard\ContextServiceProvider;

class AdminContextServiceProvider extends ContextServiceProvider
{
    public static string $name = 'admin-context';
}

<?php

namespace Salleh\HmacGuard\Guards;

use Illuminate\Auth\GuardHelpers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Traits\Macroable;

class HmacAuthGuard implements Guard
{
    use GuardHelpers, Macroable;

    /**
     * The identity provider implementation.
     *
     * @var \Salleh\HmacAuth\HmacAuthIdentityProvider
     */
    protected $provider;

    /**
     * The identity repository instance.
     *
     * @var \Salleh\HmacAuth\HmacAuthIdentityRepository
     */
    protected $identities;
}

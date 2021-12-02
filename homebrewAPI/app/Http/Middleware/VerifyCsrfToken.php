<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = ['/saveSpell','/api/savespell','/api/searchSpell','/searchSpell','/saveItem','/api/saveitem','/api/searchitem','/searchitem'
        //
    ];
}

<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'teacher/listdelete/*',
        'teacher/createfirst',
        'teacher/createsecond',
        'teacher/createthird',
        'teacher/editthumb',
        'teacher/editCourseInfo',
    ];
}

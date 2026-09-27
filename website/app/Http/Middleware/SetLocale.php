<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(
        Request $request,
        Closure $next
    ): Response {
        $locale = $request->route('locale');

        if ($locale === 'en') {
            app()->setLocale('en');
        } else {
            app()->setLocale('pt_BR');
        }

        return $next($request);
    }
}

<?php
namespace App\Http\Middleware;



use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VendorMiddleware
{
    public function handle(
        Request $request,
        Closure $next
    ): Response {
        if (!$request->session()->has('vendor_id')) {
            return redirect()
                ->route('vendor.login')
                ->with('error', 'Please sign in first.');
        }

        return $next($request);
    }
}

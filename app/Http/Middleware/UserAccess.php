<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use function Laravel\Prompts\alert;
use function Pest\Laravel\json;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::user()->role == $role) {

            return $next($request);
            // return redirect(url()->previous());
        } elseif (Auth::check()) {
            if (Auth::user()->role == 'admin' && request()->path() != 'admin') {
                return redirect('/admin/dashboard');
            } elseif (Auth::user()->role == 'consultant' && request()->path() != 'consultant') {
                return redirect('/consultant/workspace');
            } elseif (Auth::user()->role == 'user' && request()->path() != 'users') {
                return redirect('/users');
            }
        }
        return response()->json(["You're Unauthorized"]);
    }
}

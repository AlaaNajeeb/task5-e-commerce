<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if (Auth::check() && Auth::user()->role === 'admin') {  
            return $next($request);  //redirect('login');
        }  
        // إذا لم يكن المستخدم موجودًا أو ليس admin، يمكنك توجيهه إلى صفحة مختلفة  
        return redirect('/home')->with('error', 'ليس لديك صلاحيات للوصول إلى هذه الصفحة.');      
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Store;

class InactivityTimeout
{
    /**
     * The session store implementation.
     *
     * @var \Illuminate\Session\Store
     */
    protected $session;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Session\Store  $session
     * @return void
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $maxIdleTime = 30; // Max idle time in minutes

        $lastActivity = $this->session->get('last_activity');
        if ($lastActivity !== null && time() - $lastActivity > $maxIdleTime * 60) {
            Auth::logout();
            $this->session->flush();
            return redirect()->route('login')->withErrors('Session expired due to inactivity.');
        }

        $this->session->put('last_activity', time());

        return $next($request);
    }
}

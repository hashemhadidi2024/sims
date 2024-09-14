public function handle($request, Closure $next)
{
    if (auth()->user()->role !== 'admin') {
        return redirect('/home');
    }

    return $next($request);
}

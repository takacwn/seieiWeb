<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\View\FileViewFinder;

class FinderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      $ua = $request->server->get('HTTP_USER_AGENT', '');
      $path = base_path() . '/resources/views/';
      if (preg_match('/iphone|ipad|android/i', $ua)) {
          $path .= 'sp';
      } else {
          $path .= 'pc';
      }
      $view = app('view');
      $paths = $view->getFinder()->getPaths();
      array_unshift($paths, $path);
      $finder = new FileViewFinder(app('files'), $paths);

      $view->setFinder($finder);
      return $next($request);

    }
}

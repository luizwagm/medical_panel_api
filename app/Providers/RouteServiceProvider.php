<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $apiNamespace = 'App\Http\Controllers\Api';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->groupRoutesApi();
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }

    /*
    |--------------------------------------------------------------------------
    | API Route Grouping
    |--------------------------------------------------------------------------
    |
    | In this method will be the grouping of API versioned routes.
    | With each new version created, a new group must be created, as well as a 
    | new file containing the routes that must be used by the version.
    |
    */
    protected function groupRoutesApi()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace("{$this->apiNamespace}\V1")
            ->group(base_path("routes/api/v1.php"));
    }
}

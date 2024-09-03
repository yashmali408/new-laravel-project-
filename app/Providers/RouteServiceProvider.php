<?php

class RouteServiceProvider extends ServiceProvider{
    //1. property

    //2. Constructor

    //3. Method
    public function boot()
    {
        parent::boot();
    }
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapFrontendRoutes();
        $this->mapBackendRoutes();
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapFrontendRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)  // Set this if you have a namespace for your controllers
            ->group(base_path('routes/frontend_route.php'));
    }

    protected function mapBackendRoutes()
    {
        Route::middleware(['web', 'auth'])  // Example middleware for backend routes
            ->prefix('admin')  // Example prefix for backend routes
            ->namespace($this->namespace)  // Set this if you have a namespace for your controllers
            ->group(base_path('routes/backend_route.php'));
    }
}




?>
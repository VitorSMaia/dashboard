<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('haspermission', function($permissions) {

            $authUser = auth()->user();

            if (is_array($permissions)) {
                $accepted = 0;

                foreach ($permissions as $itemPermission) {
                    if ($authUser->can($itemPermission)) {
                        $accepted++;
                    }
                }

                if ($accepted > 0) {
                    return true;
                }

                return false;
            }

            return $authUser->can($permissions);
        });
    }
}

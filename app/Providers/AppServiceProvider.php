<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Http\Resources\Json\JsonResource;
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
        JsonResource::withoutWrapping();
        try {
            $carts = Cart::get();
            view()->share([
                'carts' => $carts,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

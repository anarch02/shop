<?php

namespace App\Providers;

use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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
        // Model::preventLazyLoading(! app()->isProduction());
        Model::preventSilentlyDiscardingAttributes(!app()->isProduction());

        // DB::whenQueryingForLongerThan(500, function (Connection $connection, QueryExecuted $event) {
        //     logger()
        //         ->channel('telegram')
        //         ->debug('whenQueryingForLongerThan' . $connection->query()->toSql());
        // });

        // $kernel ->whenRequestLifecycleIsLongerThan(
        //     CarbonInterval::seconds(4),
        //     function()
        //     {
        //         logger()
        //             ->channel('telegram')
        //             ->debug('whenRequestLifeIsLongerThan' . $request()->url());
        //     }
        // );
    }
}

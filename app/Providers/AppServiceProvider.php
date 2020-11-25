<?php

namespace App\Providers;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;
// The Date facade
use Illuminate\Support\Facades\Date;

use App\Event;
use App\Observers\RecurrenceObserver;
// And the CarbonImmutable class
use Carbon\CarbonImmutable;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::defaultStringLength(191); // Update defaultStringLength
        Event::observe(RecurrenceObserver::class);

    }
}

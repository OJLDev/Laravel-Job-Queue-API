<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\SubmissionSaved;
use App\Listeners\LogSubmissionSaved;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        SubmissionSaved::class => [
            LogSubmissionSaved::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // You can also use this method to manually register event listeners if needed
        // For example:
        // Event::listen(
        //     SubmissionSaved::class,
        //     [LogSubmissionSaved::class, 'handle']
        // );
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],


        //-------------------------------------------
        // AccessDetectionイベントとMakeTextリスナを登録して、php artisan event:generateをする
        //-------------------------------------------
        // アクセス時にイベントを発行する側
        'App\Events\AccessDetection' => [
            // テキストを生成＆書き込みを行うリスナー側
            'App\Listeners\MakeTextListener',
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SampleQueueWork extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $exitCode = Artisan::call('queue:work --stop-when-empty');

        \Log::info($exitCode);
        

        return redirect('/sample/events');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// イベントをuseする
use App\Events\AccessDetection;

class Sample extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // イベントをディスパッチする
        event(new AccessDetection('ランダム文字列'.str_random(10)."t\n"));

        $log = '';

        foreach (glob(storage_path('texts').'/*') as $file) {
            if (is_file($file)) {
                $log .= basename($file) . '　:　' . file_get_contents($file);
            }
        }

        return view('sample_events', ['log' => nl2br($log)]);
    }
}

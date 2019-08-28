<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

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
        $queryCount = count($request->query);
        // クエリ文字列が含まれる場合は、イベントにひもづくリスナーを実行させない
        if (!empty($queryCount)) {
            \Event::forget(AccessDetection::class);
        }


        // イベントをディスパッチする(どっちの書き方でも良い。上はヘルパ関数、下はファサードを使用)
        // event(new AccessDetection('ランダム文字列'.str_random(10)."t\n"));
        \Event::dispatch(new AccessDetection('ランダム文字列'.str_random(10)."t\n"));

        $text = '';
        $log = '';

        foreach (glob(storage_path('texts').'/*') as $file) {
            if (is_file($file)) {
                $text .= basename($file) . '　:　' . file_get_contents($file);
            }
        }

        foreach (glob(storage_path('logs').'/laravel-*') as $file) {
            if (is_file($file)) {
                $log .= file_get_contents($file);
            }
        }

        return view('sample_events', ['text' => nl2br($text), 'log' => nl2br($log)]);
    }
}

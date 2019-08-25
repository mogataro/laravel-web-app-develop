<?php

namespace App\Listeners;

use App\Events\AccessDetection;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MakeTextListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AccessDetection  $event
     * @return void
     */
    public function handle(AccessDetection $event)
    {
        // テキストファイル作成
        $file = sprintf('%s/%s.txt', storage_path('texts'), date('Ymd-His'));
        touch($file);// storage/texts/Ymd-His.txtを作成
        
        $current = file_get_contents($file);//storage/texts/Ymd-His.txtの中身を取得
        $current .= $event->param;//storage/texts/Ymd-His.txtの既存の中身にparamを連結
        file_put_contents($file, $current);// $currentの内容をstorage/texts/Ymd-His.txtに書き込み
    }
}

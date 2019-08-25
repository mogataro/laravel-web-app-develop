<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AccessDetection
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $param;

    /**
     * Create a new event instance.
     * メンバ変数「$param」を定義して、コンストラクタで引数「$value」を受け取ってそこへ格納
     *
     * @return void
     */
    public function __construct($value)
    {
        $this->param = $value;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

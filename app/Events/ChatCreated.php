<?php

namespace App\Events;

use App\Models\Messages_anggota; 
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel; 
use Illuminate\Broadcasting\PresenceChannel; 
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;


class ChatCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message; 

    public function __construct(Messages_anggota $message){
        $this->message = $message; 
    }

    public function broadcastWith()
    {  
        return [
            'message' => $this->message->load(['user'])->toArray()
        ];
    }

    public function broadcastOn()
    {
        return new PresenceChannel('channel-anggota'); 
    }

    public function broadcastAs()
    {
        return 'server.created';
    }
}

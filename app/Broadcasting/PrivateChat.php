<?php

namespace App\Broadcasting;

use App\Models\User;
use BeyondCode\LaravelWebSockets\WebSockets\Channels\PrivateChannel;

class PrivateChat
{
    /**
     * Create a new channel instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     */
    public function join(User $user): array|bool
    {
        //
    }

    public function broadcastOn()
{
    return new PrivateChannel('private-chat.'.$this->receiverId);
}
}

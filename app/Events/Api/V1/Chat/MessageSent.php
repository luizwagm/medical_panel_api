<?php

namespace App\Events\Api\V1\Chat;

use App\Models\Api\V1\Chat;
use App\Models\Api\V1\Message;
use Illuminate\Foundation\Auth\User;


class MessageSent
{
    public function __construct(
        public User $user,
        public Message $message,
        public Chat $chat
    ) {  
    }
}

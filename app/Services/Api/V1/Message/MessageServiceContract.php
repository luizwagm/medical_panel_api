<?php

namespace App\Services\Api\V1\Message;

use Illuminate\Foundation\Auth\User;

interface MessageServiceContract
{
    public function create(array $request, User $sender, User $receiver);
}
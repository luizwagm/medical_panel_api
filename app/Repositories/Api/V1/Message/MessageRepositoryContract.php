<?php

namespace App\Repositories\Api\V1\Message;

use Illuminate\Foundation\Auth\User;

interface MessageRepositoryContract
{
    public function create(array $message);
    public function getChatMessages(array $request);
}
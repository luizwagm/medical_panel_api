<?php

namespace App\Services\Api\V1\Chat;

interface ChatServiceContract
{
    public function getOrCreate(array $request);
    public function sendMessageForChat(array $request);
    public function getChatMessages(array $request);
}
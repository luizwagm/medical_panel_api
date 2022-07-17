<?php 

namespace App\Services\Api\V1\Message;

use App\Models\Api\V1\Message;
use Illuminate\Foundation\Auth\User;
use App\Repositories\Api\V1\Message\MessageRepositoryContract;

class MessageService implements MessageServiceContract
{
    public function __construct(
        protected MessageRepositoryContract $messageRepository,
    ) {}

    public function create(array $request, User $sender, User $receiver): Message
    {
        $message = $this->prepareMessageStructure($request, $sender, $receiver);

        return $this->messageRepository->create($message);
    }

    private function prepareMessageStructure(
        array $messageData,
        User $sender,
        User $receiver
    ): array {
        $messageStructure = [
            'user_id' => $sender->id,
            'chat_id' => $messageData['chat_id'],
            'text' => $messageData['text'],
        ];

        return $messageStructure;
    }
}
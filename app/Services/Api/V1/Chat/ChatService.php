<?php 

namespace App\Services\Api\V1\Chat;

use App\Models\Api\V1\Chat;
use App\Models\Api\V1\Message;
use Illuminate\Foundation\Auth\User;
use App\Exceptions\SameUserException;
use App\Events\Api\V1\Chat\MessageSent;
use App\Exceptions\ChatNotFoundException;
use App\Exceptions\UserNotFoundException;
use App\Services\Api\V1\User\UserServiceContract;
use App\Services\Api\V1\Message\MessageServiceContract;
use App\Repositories\Api\V1\Chat\ChatRepositoryContract;
use App\Repositories\Api\V1\Message\MessageRepositoryContract;

class ChatService implements ChatServiceContract
{
    public function __construct(
        protected ChatRepositoryContract $chatRepository,
        protected UserServiceContract $userService,
        protected MessageServiceContract $messageService,
        protected MessageRepositoryContract $messageRepository,
    ) {}

    public function getOrCreate(array $request): Chat
    {
        list($sender, $receiver) = $this->validateUsers($request);

        $chat = $this->chatRepository->get($sender, $receiver);

        if (empty($chat)) {
            return $this->chatRepository->create($sender, $receiver, $request);
         }

        return $chat;
    }

    public function validateUsers(array $request): array
    {
        $sender = auth()->user();

        $receiver = $this->userService->get($request['user_id']);

        if (! $sender || ! $receiver) {
            throw new UserNotFoundException();
        }

        if ($sender->id === $receiver->id) {
            throw new SameUserException();
        }

        return [$sender, $receiver];
    }

    public function sendMessageForChat(array $request)
    {
        list($sender, $receiver) = $this->validateUsers($request);

        $chat = $this->chatRepository->get($sender, $receiver);

        if (! $chat) {
            throw new ChatNotFoundException();
        }

        $message = $this->messageService->create($request, $sender, $receiver);

        if ($message !== null) {
            $this->messageEvents($chat, $sender, $receiver, $message);
        }

        return $message;
    }

    private function messageEvents(Chat $chat, User $sender, User $receiver, Message $message): void
    {
        event(new MessageSent($sender, $message, $chat));
    }

    public function getChatMessages(array $request)
    {
        return $this->messageRepository->getChatMessages($request);
    }
}
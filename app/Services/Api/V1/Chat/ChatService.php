<?php 

namespace App\Services\Api\V1\Chat;

use App\Models\Api\V1\Chat;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\SameUserException;
use App\Exceptions\UserNotFoundException;
use App\Services\Api\V1\User\UserServiceContract;
use App\Repositories\Api\V1\Chat\ChatRepositoryContract;

class ChatService implements ChatServiceContract
{
    public function __construct(
        protected ChatRepositoryContract $repository,
        protected UserServiceContract $userService,
    ) {}

    public function getOrCreate(array $request): Chat
    {
        list($sender, $receiver) = $this->validateUsers($request);

        $chat = $this->repository->get($sender, $receiver);

        if (empty($chat)) {
            return $this->repository->create($sender, $receiver, $request);
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
}
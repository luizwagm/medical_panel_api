<?php

namespace App\Repositories\Api\V1\Chat;

use App\Models\Api\V1\Chat;
use Illuminate\Foundation\Auth\User;
use App\Repositories\Api\V1\BaseRepository;

class ChatRepository extends BaseRepository implements ChatRepositoryContract
{
    public function __construct(
        protected Chat $model,
    ) {}

    public function get(User $sender, User $receiver): Chat
    {
        $chatId = $this->getId($sender, $receiver);
        return $this->model->find($chatId);
    }

    public function create(User $sender, User $receiver, array $request): Chat
    {
        $chat = $this->model->create();

        $chat->users()->attach([$sender->id, $receiver->id]);

        return $chat;
    }

    public function getId(User $sender, User $receiver): ?int
    {
        return $sender->chats()
            ->whereHas('users', function ($sender) use ($receiver) {
                $sender->where('id', $receiver->id);
            })->first()?->id;
    }
}
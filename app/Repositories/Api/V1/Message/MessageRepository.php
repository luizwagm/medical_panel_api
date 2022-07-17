<?php 

namespace App\Repositories\Api\V1\Message;

use App\Models\Api\V1\Message;

class MessageRepository implements MessageRepositoryContract
{
    public function __construct(
        protected Message $model,
    ) {}

    public function create(array $message)
    {
        return $this->model->create($message);
    }

    public function getChatMessages($request)
    {
        return $this->model->where('chat_id',$request['chat_id'])
            ->orderByDesc('id')
            ->get();            
    }
}
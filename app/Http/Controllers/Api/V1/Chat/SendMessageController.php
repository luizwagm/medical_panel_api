<?php

namespace App\Http\Controllers\Api\V1\Chat;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Chat\SendMessageRequest;
use App\Services\Api\V1\Chat\ChatServiceContract;

class SendMessageController extends Controller
{
    public function __construct(
        protected ChatServiceContract $service
    ) {}

    public function __invoke(SendMessageRequest $request)
    {
        try {
            return json_encode(['data' => $this->service->sendMessageForChat($request->validated())]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}

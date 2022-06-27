<?php

namespace App\Http\Controllers\Api\V1\Chat;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Chat\OpenChatRequest;
use App\Services\Api\V1\Chat\ChatServiceContract;

class GetMessageController extends Controller
{
    public function __construct(
        protected ChatServiceContract $service
    ) {}

    public function __invoke(OpenChatRequest $request)
    {
        try {
            return json_encode(['data' => $this->service->getChatMessages($request->validated())]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}

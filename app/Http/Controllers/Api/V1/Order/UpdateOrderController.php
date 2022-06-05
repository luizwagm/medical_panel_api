<?php

namespace App\Http\Controllers\Api\V1\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Collaborators\UpdateCollaboratorRequest;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;

class UpdateOrderController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke(UpdateCollaboratorRequest $request, int $id)
    {
        try {
            return json_encode(['data' => $this->service->update($request->all(), $id)]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
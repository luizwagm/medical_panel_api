<?php

namespace App\Http\Controllers\Api\V1\Collaborator;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Collaborators\DeleteCollaboratorRequest;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;

class DeleteCollaboratorController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke(DeleteCollaboratorRequest $request)
    {
        try {
            return response(json_encode(['data' => $this->service->delete($request->validated()['id'])]), 204);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
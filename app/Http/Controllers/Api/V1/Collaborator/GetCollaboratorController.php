<?php

namespace App\Http\Controllers\Api\V1\Collaborator;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Collaborators\GetCollaboratorRequest;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;

class GetCollaboratorController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke(GetCollaboratorRequest $request)
    {
        try {
            return response(json_encode(['data' => $this->service->get($request->validated()['id'])]));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
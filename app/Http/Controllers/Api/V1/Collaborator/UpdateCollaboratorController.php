<?php

namespace App\Http\Controllers\Api\V1\Collaborator;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Collaborators\UpdateCollaboratorRequest;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;

class UpdateCollaboratorController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke(UpdateCollaboratorRequest $request)
    {
        try {
            print_r($this->service->update($request->all()));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
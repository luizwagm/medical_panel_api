<?php

namespace App\Http\Controllers\Api\V1\Collaborator;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Collaborators\StoreCollaboratorRequest;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;

class StoreCollaboratorController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke(StoreCollaboratorRequest $request)
    {
        try {
            print_r($this->service->store($request->all()));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
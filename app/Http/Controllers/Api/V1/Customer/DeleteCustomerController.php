<?php

namespace App\Http\Controllers\Api\V1\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Collaborators\DeleteCollaboratorRequest;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;

class DeleteCustomerController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke(DeleteCollaboratorRequest $request)
    {
        try {
            $this->service->delete($request->id);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
<?php

namespace App\Http\Controllers\Api\V1\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Collaborators\StoreCollaboratorRequest;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;

class StorePaymentController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke(StoreCollaboratorRequest $request)
    {
        try {
            return json_encode(['data' => $this->service->store($request->all())]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
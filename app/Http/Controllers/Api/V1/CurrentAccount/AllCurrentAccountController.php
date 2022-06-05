<?php

namespace App\Http\Controllers\Api\V1\CurrentAccount;

use App\Http\Controllers\Controller;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;

class AllCurrentAccountController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke()
    {
        try {
            return json_encode(['data' => $this->service->all()]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
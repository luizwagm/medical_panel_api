<?php

namespace App\Http\Controllers\Api\V1\Order;

use App\Http\Controllers\Controller;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;

class GetOrderController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke(int $id)
    {
        try {
            return json_encode(['data' => $this->service->get($id)]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
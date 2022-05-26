<?php

namespace App\Http\Controllers\Api\V1\Collaborator;

use App\Http\Controllers\Controller;
use App\Services\Api\V1\Collaborator\CollaboratorServiceContract;
use Illuminate\Http\Request;

class GetCollaboratorController extends Controller
{
    public function __construct(
        protected CollaboratorServiceContract $service
    ) {}

    public function __invoke() {
        try {
            print_r($this->service->get());
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
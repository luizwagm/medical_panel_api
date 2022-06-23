<?php

namespace App\Http\Controllers\Api\V1\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Company\DeleteCompanyRequest;
use App\Services\Api\V1\Company\CompanyServiceContract;

class DeleteCompanyController extends Controller
{
    public function __construct(
        protected CompanyServiceContract $service
    ) {}

    public function __invoke(DeleteCompanyRequest $request)
    {
        try {
            return response(json_encode(['data' => $this->service->delete()]), 204);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
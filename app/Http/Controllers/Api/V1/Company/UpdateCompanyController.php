<?php

namespace App\Http\Controllers\Api\V1\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Company\UpdateCompanyRequest;
use App\Services\Api\V1\Company\CompanyServiceContract;

class UpdateCompanyController extends Controller
{
    public function __construct(
        protected CompanyServiceContract $service
    ) {}

    public function __invoke(UpdateCompanyRequest $request)
    {
        try {
            return response(json_encode(['data' => $this->service->update($request->validated())]), 200);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
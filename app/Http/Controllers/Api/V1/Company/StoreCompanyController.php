<?php

namespace App\Http\Controllers\Api\V1\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Company\StoreCompanyRequest;
use App\Services\Api\V1\Company\CompanyServiceContract;

class StoreCompanyController extends Controller
{
    public function __construct(
        protected CompanyServiceContract $service
    ) {}

    public function __invoke(StoreCompanyRequest $request)
    {
        try {
            return response(json_encode(['data' => $this->service->store($request->validated())]), 201);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
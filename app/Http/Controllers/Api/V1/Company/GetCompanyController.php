<?php

namespace App\Http\Controllers\Api\V1\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Company\GetCompanyRequest;
use App\Services\Api\V1\Company\CompanyServiceContract;

class GetCompanyController extends Controller
{
    public function __construct(
        protected CompanyServiceContract $service
    ) {}

    public function __invoke(GetCompanyRequest $request)
    {
        try {
            return response(json_encode(['data' => $this->service->get()]));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
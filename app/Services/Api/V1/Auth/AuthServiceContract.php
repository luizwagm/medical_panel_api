<?php

namespace App\Services\Api\V1\Auth;

use App\Models\Api\V1\Users;

interface AuthServiceContract
{
    public function login(string $email, string $password): Users;
}

<?php

namespace App\Repositories\Api\V1\Chat;

use App\Models\Api\V1\Chat;
use Illuminate\Foundation\Auth\User;
use App\Repositories\Api\V1\BaseRepositoryContract;

interface ChatRepositoryContract extends BaseRepositoryContract
{
    public function get(User $sender, User $receiver);
    public function create(User $sender, User $receiver, array $request);
}
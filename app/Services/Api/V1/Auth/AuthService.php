<?php

namespace App\Services\Api\V1\Auth;

use App\Models\Api\V1\Users;
use App\Exceptions\UserNotFoundException;
use App\Exceptions\WrongCredentialsException;
use App\Services\Api\V1\Auth\AuthServiceContract;
use App\Repositories\Api\V1\User\UserRepositoryContract;
use App\Repositories\Api\V1\Collaborator\CollaboratorRepositoryContract;


class AuthService implements AuthServiceContract
{
    public function __construct(
        protected CollaboratorRepositoryContract $collaboratorRepository,
        protected UserRepositoryContract $userRepository
    ) {
	}

    public function login(string $email, string $password): Users
    {
        if (! $validEmail = $this->collaboratorRepository->getByEmail($email)) {
            throw new WrongCredentialsException();
        }

        $user = $validEmail->user;

        if (! $user) {
            throw new UserNotFoundException();
        }

        if (! password_verify($password, $user->password)) {
            throw new WrongCredentialsException();
        }

        return $user;
    }
}

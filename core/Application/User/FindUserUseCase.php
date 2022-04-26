<?php

namespace Core\Application\User;

use Core\Domain\User\Contracts\UserRepository;
use Core\Domain\User\UserEntity;

final class FindUserUseCase {

    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(int $id)
    {
        return new UserEntity($this->repository->search($id));
    }
}

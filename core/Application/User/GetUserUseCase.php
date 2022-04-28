<?php

namespace Core\Application\User;

use Core\Domain\User\UserEntity;

class GetUserUseCase
{

    public function execute(): UserEntity
    {
        return UserEntity::fromArray([]);
    }

}

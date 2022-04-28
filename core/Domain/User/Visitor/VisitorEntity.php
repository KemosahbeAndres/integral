<?php

namespace Core\Domain\User\Visitor;

use Core\Domain\User\UserEntity;

class VisitorEntity extends UserEntity
{
    public static function fromArray(?array $user): VisitorEntity
    {
        return parent::fromArray($user);
    }
}

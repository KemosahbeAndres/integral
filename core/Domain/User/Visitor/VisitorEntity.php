<?php

namespace Core\Domain\User\Visitor;

use Core\Domain\User\UserEntity;

class VisitorEntity extends UserEntity
{
    public static function fromArray(?array $user): VisitorEntity
    {
        [$id, $name, $username, $rut,
        $email, $phone, $address] = $user;
        return new VisitorEntity(
            $id, $name, $username, $rut, $email, $phone, $address
        );
    }
}

<?php

namespace Core\Domain\User\Contracts;

interface ISessionAdapter
{
    public static function logout(): void;
}

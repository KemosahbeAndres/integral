<?php

namespace Core\Domain\User\Contracts;

interface SessionAdapter
{
    public static function logout(): void;
}

<?php

namespace Core\Domain\User\Contracts;

interface ISessionAdapter
{
    public static function get_logged_user(): array;
}

<?php

namespace Core\Domain\User\Contracts;

interface UserRepository
{
    public function search(int $id): ?array;
    public function persist(array $object): void;
    public function delete(int $id): ?bool;
}

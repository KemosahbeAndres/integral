<?php

namespace Core\Domain\Resource\Contracts;

interface IResourceRepository
{
    public function getAll(int $moduleid): ?array;
    public function get(int $id): ?array;
    public function save(array $resource, int $moduleid): ?int;
    public function delete(int $id): bool;
}

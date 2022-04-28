<?php

namespace Core\Domain\Resource;

abstract class ResourceEntity
{
    protected int $id;
    protected string $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public abstract static function fromArray(array $resource): ResourceEntity;
    public abstract function toArray(): ?array;
}

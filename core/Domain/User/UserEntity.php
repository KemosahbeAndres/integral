<?php

namespace Core\Domain\User;

class UserEntity
{
    private int $id;
    private string $name;

    public function __construct(array $params)
    {
        $this->id = $params['id'];
        $this->name = $params['name'];
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function toArray(): ?array
    {
        return [
            $this->id,
            $this->name
        ];
    }

}

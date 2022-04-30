<?php

namespace Core\Domain\User;

abstract class UserEntity
{
    protected int $id;
    protected string $name;
    protected string $username;
    protected string $rut;
    protected string $email;
    protected string $phone;
    protected ?string $address;

    public function __construct(int $id, string $name, string $username, string $rut, string $email, string $phone, ?string $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->rut = $rut;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }
    public abstract static function fromArray(?array $user): UserEntity;
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

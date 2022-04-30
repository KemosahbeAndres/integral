<?php

namespace Core\Domain\Contracts;

interface IArrayable
{
    public function toArray(): ?array;
    public static function fromArray(array $array): IArrayable;
}

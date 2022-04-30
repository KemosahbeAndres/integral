<?php

namespace Tests\Unit;

use Core\Domain\User\Visitor\VisitorEntity;
use Core\Domain\User\UserEntity;
use PHPUnit\Framework\TestCase;

class VisitorEntityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCanBeCreatedFromArray()
    {
        $this->assertInstanceOf(UserEntity::class, VisitorEntity::fromArray([
            0, '', '', '', '', '', ''
        ]));
    }
}

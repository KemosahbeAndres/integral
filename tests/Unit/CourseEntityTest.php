<?php

namespace Tests\Unit;

use Core\Domain\Course\CourseEntity;
use Core\Domain\Enrollment\EnrollmentEntity;
use Core\Domain\User\Visitor\VisitorEntity;
use PHPUnit\Framework\TestCase;

class CourseEntityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCanCreateNewInstance()
    {
        $this->assertInstanceOf(
            CourseEntity::class,
            new CourseEntity(
                0, 'name', 'description', 'code', 'z_index'
            )
        );
    }
    public function testCanCreateFromArray()
    {
        $this->assertInstanceOf(
            CourseEntity::class,
            CourseEntity::fromArray(
                [0, 'name', 'description', 'code', 'z_index']
            )
        );
    }
    public function testCanRequestEnrollUser()
    {
        $this->assertInstanceOf(
            EnrollmentEntity::class,
            (new CourseEntity(
                0, 'name', 'description', 'code', 'z_index'
            ))->requestEnroll(new VisitorEntity(
                0, '', '', '', '', '', ''
            ))
        );
    }
}

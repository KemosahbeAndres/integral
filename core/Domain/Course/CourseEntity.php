<?php

namespace Core\Domain\Course;

use Core\Domain\Contracts\IArrayable;
use Core\Domain\Contracts\IEnrollable;
use Core\Domain\User\UserEntity;
use Core\Domain\Enrollment\EnrollmentEntity;

class CourseEntity implements IEnrollable, IArrayable
{
    public function toArray(): ?array
    {
        return [];
    }
    public static function fromArray(array $list): CourseEntity
    {
        return new CourseEntity();
    }
    /**
     * @return EnrollmentEntity
     */
    public function requestEnroll(UserEntity $user, ?string $role): EnrollmentEntity
    {
        return EnrollmentEntity::request($user->getID(), CourseEntity::class, $this->id, $role);
    }
    /**
     * @return Array<EnrollmentEntity>
     */
    public function enrollUsers(array $users): ?array
    {
        return [];
    }
}

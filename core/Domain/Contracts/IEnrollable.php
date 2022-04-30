<?php

namespace Core\Domain\Contracts;

use Core\Domain\User\UserEntity;
use Core\Domain\Enrollment\EnrollmentEntity;

interface IEnrollable
{
    /**
     * @return EnrollmentEntity
     */
    public function requestEnroll(UserEntity $user, string $role): EnrollmentEntity;
    // /**
    //  * @return Boolean
    //  */
    // public function acceptEnroll(EnrollmentEntity $enrollment): bool;
    // /**
    //  * @param int $id
    //  * @return Boolean
    //  */
    // public function rejectEnroll(EnrollmentEntity $enrollment): bool;
}

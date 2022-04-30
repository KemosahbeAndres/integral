<?php

namespace Core\Application\Course;

use Core\Application\Role;
use Core\Domain\Course\ICourseRepository;
use Core\Domain\Enrollment\EnrollmentEntity;
use Core\Domain\Enrollment\IEnrollmentRepository;
use Core\Domain\User\UserEntity;

class EnrollStudentUseCase
{
    private ICourseRepository $courses;
    private IEnrollmentRepository $enrollments;

    public function __construct(ICourseRepository $course_repository, IEnrollmentRepository $enrollment_repository)
    {
        $this->courses = $course_repository;
        $this->enrollments = $enrollment_repository;
    }

    public function execute(int $user_id, Role $role)
    {
        $enrollment = EnrollmentEntity::request();
        $this->enrollments->persist($enrollment->toArray());
    }
}

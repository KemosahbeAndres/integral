<?php

namespace Core\Application\Course;

use Core\Domain\Enrollment\EnrollmentEntity;
use Core\Domain\Enrollment\IEnrollmentRepository;

class RequestEnrollmentUseCase
{
    private IEnrollmentRepository $enrollments;

    public function __construct(IEnrollmentRepository $enrollment_repository)
    {
        $this->enrollments = $enrollment_repository;
    }

    public function execute(int $user_id, int $course_id)
    {
        $user;
        $course;
        $enrollment = EnrollmentEntity::request();
        $this->enrollments->persist($enrollment->toArray());
    }
}

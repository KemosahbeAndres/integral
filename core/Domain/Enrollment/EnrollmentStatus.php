<?php

namespace Core\Domain\Enrollment;

abstract class EnrollmentStatus
{
    const Accepted = 'accepted';
    const Pending = 'pending';
    const Rejected = 'rejected';
}

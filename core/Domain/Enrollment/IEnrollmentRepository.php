<?php

namespace Core\Domain\Enrollment;

interface IEnrollmentRepository
{
    public function search(int $id): ?array;
    public function persist(?array $enrollment): bool;
    public function delete(int $id): bool;
}

<?php

namespace Core\Domain\Enrollment;

use Core\Domain\Contracts\IArrayable;
use Core\Domain\Enrollment\Role;

class EnrollmentEntity implements IArrayable
{
    protected ?int $id;
    protected string $status;
    protected string $enrollable_type;
    protected int $enrollable_id;
    protected int $user_id;
    protected int $created_at;
    protected int $updated_at;

    private function __construct(?int $id, string $status, string $enrollable_type, int $enrollable_id, int $user_id, string $role, ?int $created_at, ?int $updated_at)
    {
        $this->id = $id;
        $this->status = $status;
        $this->enrollable_type = $enrollable_type;
        $this->enrollable_id = $enrollable_id;
        $this->user_id = $user_id;
        $this->role = $role;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public static function fromArray(array $array): EnrollmentEntity
    {
        [$id, $status, $enrollable_type, $enrollable_id, $user_id, $role, $created_at, $updated_at] = $array;
        return new EnrollmentEntity(
            $id, $status, $enrollable_type, $enrollable_id, $user_id, $role, $created_at, $updated_at
        );
    }

    public function toArray(): ?array
    {
        return [
            $this->id, $this->status, $this->enrollable_type, $this->enrollable_id, $this->user_id, $this->role, $this->created_at, $this->updated_at
        ];
    }

    public static function request(int $user_id, string $enrollable_type, int $enrollable_id, string $role = Role::Student): EnrollmentEntity
    {
        return new EnrollmentEntity(
            null, EnrollmentStatus::Pending, $enrollable_type, $enrollable_id, $user_id, $role, null, null
        );
    }
    public function accept()
    {
        $this->status = EnrollmentStatus::Accepted;
    }
    public function reject()
    {
        $this->status = EnrollmentStatus::Rejected;
    }
}

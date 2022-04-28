<?php

namespace Core\Infrastructure\User;

use App\Models\User;
use Core\Domain\User\Contracts\IUserRepository;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EloquentUserRepository implements IUserRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new User();
    }
    public function search(int $id): ?array
    {
        $this->model->find($id);
        $this->ensureExist($this->model->toArray());
        return $this->model->toArray();
    }
    public function persist(?array $entity): void
    {
        if(empty($object)) throw new Exception('Data error');

        $this->model->fill($entity);
        $this->model->save();
    }
    public function delete(int $id): ?bool
    {
        $userid = User::destroy($id);
        return $userid != null ? true : false;
    }
    private function ensureExist(?array $user): void
    {
        if(empty($user)){
            throw new Exception('User not found');
        }
    }

}

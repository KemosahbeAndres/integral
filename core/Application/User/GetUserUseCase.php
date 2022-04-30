<?php

namespace Core\Application\User;

use Core\Domain\User\Contracts\ISessionAdapter;
use Core\Domain\User\Contracts\IUserRepository;
use Core\Domain\User\UserEntity;
use Core\Domain\User\Visitor\VisitorEntity;

class GetUserUseCase
{
    private IUserRepository $repository;
    private ISessionAdapter $session;
    public function __construct(IUserRepository $repo, ISessionAdapter $session)
    {
        $this->repository = $repo;
        $this->session = $session;
    }
    public function execute(): UserEntity
    {
        $session_user = $this->session->get_logged_user();
        return VisitorEntity::fromArray([]);
    }

}

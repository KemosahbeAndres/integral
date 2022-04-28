<?php

namespace Core\Application\Resource;

use Core\Domain\Resource\Contracts\IResourceRepository;
use Core\Domain\Resource\ResourceEntity;
use Core\Domain\Resource\Video\VideoEntity;

final class GetResourcesUseCase
{
    private IResourceRepository $repository;

    public function __construct(IResourceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Array<ResourceEntity>
     */
    public function execute($moduleid): ?array
    {
        $resourceArray = array();
        $resources = $this->repository->getAll($moduleid);

        foreach($resources as $resource){
            switch($resource['type']){
                case VideoEntity::class:
                    array_push($resourceArray, VideoEntity::fromArray($resource));
                    break;
                default:
                    continue;
            }
        }
        return $resourceArray;
    }
}

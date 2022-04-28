<?php

namespace Core\Domain\Resource\Video;

use Core\Domain\Resource\ResourceEntity;

class VideoEntity extends ResourceEntity
{
    private string $link;

    public function __construct(int $id, string $name, string $link)
    {
        parent::__construct($id, $name);
        $this->link = $link;
    }

    public static function fromArray(array $content): ResourceEntity
    {
        return new VideoEntity($content['id'], $content['name'], $content['link']);
    }

    public function toArray(): ?array
    {
        return [
            $this->id,
            $this->name,
            $this->link
        ];
    }
}

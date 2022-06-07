<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TagsRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagsRepository::class)]
#[ApiResource(attributes: [
    'normalization_context' => ['groups' => ['tag:read']],
    'denormalization_context' => ['groups' => ['tag:write']],
])]
class Tags
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(["tag:read","tag:write","tagElement:read"])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(["tag:read","tag:write","tagElement:read"])]
    private $tagName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    public function setTagName(string $tagName): self
    {
        $this->tagName = $tagName;

        return $this;
    }
}

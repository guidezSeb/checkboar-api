<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ElementTypeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ElementTypeRepository::class)]
#[ApiResource(attributes: [
    'normalization_context' => ['groups' => ['elementType:read']],
    'denormalization_context' => ['groups' => ['elementType:write']],
])]
class ElementType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(["elementType:read","elementType:write", "element:read","elementUser:read"])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(["elementType:read","elementType:write","element:read","elementUser:read"])]
    private $typeName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeName(): ?string
    {
        return $this->typeName;
    }

    public function setTypeName(string $typeName): self
    {
        $this->typeName = $typeName;

        return $this;
    }
}

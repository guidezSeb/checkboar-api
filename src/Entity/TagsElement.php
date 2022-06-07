<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TagsElementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagsElementRepository::class)]
#[ApiResource(attributes: [
    'normalization_context' => ['groups' => ['tagElement:read']],
    'denormalization_context' => ['groups' => ['tagElement:write']],
])]
class TagsElement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Element::class, inversedBy: 'elementTags')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["tag:read","tagElement:write","tagElement:read","element:read"])]
    private $elementid;

    #[ORM\ManyToMany(targetEntity: Tags::class)]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["tag:read","tagElement:write","tagElement:read","element:read"])]
    private $tagId;

    public function __construct()
    {
        $this->tagId = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Elements>
     */
    public function getElementid(): ?Element
    {
        return $this->elementid;
    }

    public function setElementid(?Element $elementid): self
    {
        $this->elementid = $elementid;

        return $this;
    }

    /**
     * @return Collection<int, Tags>
     */
    public function getTagId(): Collection
    {
        return $this->tagId;
    }

    public function addTagId(Tags $tagId): self
    {
        if (!$this->tagId->contains($tagId)) {
            $this->tagId[] = $tagId;
        }

        return $this;
    }

    public function removeTagId(Tags $tagId): self
    {
        $this->tagId->removeElement($tagId);

        return $this;
    }



}

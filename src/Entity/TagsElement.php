<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TagsElementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagsElementRepository::class)]
#[ApiResource]
class TagsElement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Element::class, inversedBy: 'elementTags')]
    #[ORM\JoinColumn(nullable: false)]
    private $elementid;

    #[ORM\ManyToMany(targetEntity: tags::class)]
    private $tagId;

    public function __construct()
    {
        $this->tagId = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

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
     * @return Collection<int, tags>
     */
    public function getTagId(): Collection
    {
        return $this->tagId;
    }

    public function addTagId(tags $tagId): self
    {
        if (!$this->tagId->contains($tagId)) {
            $this->tagId[] = $tagId;
        }

        return $this;
    }

    public function removeTagId(tags $tagId): self
    {
        $this->tagId->removeElement($tagId);

        return $this;
    }



}

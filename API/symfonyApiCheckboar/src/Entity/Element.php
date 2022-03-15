<?php

namespace App\Entity;

use App\Repository\ElementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ElementRepository::class)]
class Element
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $ElementId;

    #[ORM\Column(type: 'string', length: 255)]
    private $ElementName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ElementAuthor;

    #[ORM\Column(type: 'string', length: 255)]
    private $ElementDescription;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ElementStatus;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $ElementIsFavorite;

    #[ORM\Column(type: 'string', length: 255)]
    private $ElementCoverImage;

    #[ORM\Column(type: 'array', nullable: true)]
    private $ElementRelation = [];

    #[ORM\Column(type: 'array', nullable: true)]
    private $ElementTag = [];

    #[ORM\Column(type: 'date', nullable: true)]
    private $ElementDateRelease;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getElementId(): ?int
    {
        return $this->ElementId;
    }

    public function setElementId(int $ElementId): self
    {
        $this->ElementId = $ElementId;

        return $this;
    }

    public function getElementName(): ?string
    {
        return $this->ElementName;
    }

    public function setElementName(string $ElementName): self
    {
        $this->ElementName = $ElementName;

        return $this;
    }

    public function getElementAuthor(): ?string
    {
        return $this->ElementAuthor;
    }

    public function setElementAuthor(?string $ElementAuthor): self
    {
        $this->ElementAuthor = $ElementAuthor;

        return $this;
    }

    public function getElementDescription(): ?string
    {
        return $this->ElementDescription;
    }

    public function setElementDescription(string $ElementDescription): self
    {
        $this->ElementDescription = $ElementDescription;

        return $this;
    }

    public function getElementStatus(): ?string
    {
        return $this->ElementStatus;
    }

    public function setElementStatus(?string $ElementStatus): self
    {
        $this->ElementStatus = $ElementStatus;

        return $this;
    }

    public function getElementIsFavorite(): ?bool
    {
        return $this->ElementIsFavorite;
    }

    public function setElementIsFavorite(?bool $ElementIsFavorite): self
    {
        $this->ElementIsFavorite = $ElementIsFavorite;

        return $this;
    }

    public function getElementCoverImage(): ?string
    {
        return $this->ElementCoverImage;
    }

    public function setElementCoverImage(string $ElementCoverImage): self
    {
        $this->ElementCoverImage = $ElementCoverImage;

        return $this;
    }

    public function getElementRelation(): ?array
    {
        return $this->ElementRelation;
    }

    public function setElementRelation(?array $ElementRelation): self
    {
        $this->ElementRelation = $ElementRelation;

        return $this;
    }

    public function getElementTag(): ?array
    {
        return $this->ElementTag;
    }

    public function setElementTag(?array $ElementTag): self
    {
        $this->ElementTag = $ElementTag;

        return $this;
    }

    public function getElementDateRelease(): ?\DateTimeInterface
    {
        return $this->ElementDateRelease;
    }

    public function setElementDateRelease(?\DateTimeInterface $ElementDateRelease): self
    {
        $this->ElementDateRelease = $ElementDateRelease;

        return $this;
    }
}

<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ElementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ElementRepository::class)]
#[ApiResource]
class Element
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $ElementName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $elementAuthor;

    #[ORM\Column(type: 'text', nullable: true)]
    private $elementDescription;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $elementStatus;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $elementCoverImage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $elementRelation;

  

    #[ORM\Column(type: 'date', nullable: true)]
    private $elementDateStart;

    #[ORM\Column(type: 'date', nullable: true)]
    private $elementDateEnd;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $elementTotalChapter;

 

    #[ORM\OneToMany(mappedBy: 'elementid', targetEntity: TagsElement::class, orphanRemoval: true)]
    private $elementTags;

    #[ORM\ManyToOne(targetEntity: ElementType::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $elementType;

    public function __construct()
    {
        $this->elementTags = new ArrayCollection();
    }

 

    public function getId(): ?int
    {
        return $this->id;
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
        return $this->elementAuthor;
    }

    public function setElementAuthor(?string $elementAuthor): self
    {
        $this->elementAuthor = $elementAuthor;

        return $this;
    }

    public function getElementDescription(): ?string
    {
        return $this->elementDescription;
    }

    public function setElementDescription(?string $elementDescription): self
    {
        $this->elementDescription = $elementDescription;

        return $this;
    }

    public function getElementStatus(): ?bool
    {
        return $this->elementStatus;
    }

    public function setElementStatus(?bool $elementStatus): self
    {
        $this->elementStatus = $elementStatus;

        return $this;
    }

    public function getElementCoverImage(): ?string
    {
        return $this->elementCoverImage;
    }

    public function setElementCoverImage(?string $elementCoverImage): self
    {
        $this->elementCoverImage = $elementCoverImage;

        return $this;
    }

    public function getElementRelation(): ?int
    {
        return $this->elementRelation;
    }

    public function setElementRelation(?int $elementRelation): self
    {
        $this->elementRelation = $elementRelation;

        return $this;
    }



    public function getElementDateStart(): ?\DateTimeInterface
    {
        return $this->elementDateStart;
    }

    public function setElementDateStart(?\DateTimeInterface $elementDateStart): self
    {
        $this->elementDateStart = $elementDateStart;

        return $this;
    }

    public function getElementDateEnd(): ?\DateTimeInterface
    {
        return $this->elementDateEnd;
    }

    public function setElementDateEnd(?\DateTimeInterface $elementDateEnd): self
    {
        $this->elementDateEnd = $elementDateEnd;

        return $this;
    }

    public function getElementTotalChapter(): ?int
    {
        return $this->elementTotalChapter;
    }

    public function setElementTotalChapter(?int $elementTotalChapter): self
    {
        $this->elementTotalChapter = $elementTotalChapter;

        return $this;
    }

  

    /**
     * @return Collection<int, TagsElement>
     */
    public function getElementTags(): Collection
    {
        return $this->elementTags;
    }

    public function addElementTag(TagsElement $elementTag): self
    {
        if (!$this->elementTags->contains($elementTag)) {
            $this->elementTags[] = $elementTag;
            $elementTag->setElementid($this);
        }

        return $this;
    }

    public function removeElementTag(TagsElement $elementTag): self
    {
        if ($this->elementTags->removeElement($elementTag)) {
            // set the owning side to null (unless already changed)
            if ($elementTag->getElementid() === $this) {
                $elementTag->setElementid(null);
            }
        }

        return $this;
    }

    public function getElementType(): ?ElementType
    {
        return $this->elementType;
    }

    public function setElementType(?ElementType $elementType): self
    {
        $this->elementType = $elementType;

        return $this;
    }


}

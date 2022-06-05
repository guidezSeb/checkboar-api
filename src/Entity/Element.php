<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ElementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ElementRepository::class)]
#[ApiResource(attributes: [
    'normalization_context' => ['groups' => ['element:read']],
    'denormalization_context' => ['groups' => ['element:write']],
])]
class Element
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(["element:read","element:write","elementUser:read"])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(["element:read","element:write","elementUser:read"])]
    private $ElementName;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Groups(["element:read","element:write"])]
    private $elementDescription;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(["element:read","element:write"])]
    private $elementStatus;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(["element:read","element:write","elementUser:read"])]
    private $elementCoverImage;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Groups(["element:read","element:write"])]
    private $elementRelation;

    #[ORM\Column(type: 'date', nullable: true)]
    #[Groups(["element:read","element:write","elementUser:read"])]
    private $elementDateRelease;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Groups(["element:read","element:write","elementUser:read"])]
    private $elementTotalChapter;

    #[ORM\OneToMany(mappedBy: 'elementid', targetEntity: TagsElement::class, orphanRemoval: true)]
    #[Groups(["element:read","element:write"])]
    private $elementTags;

    #[ORM\ManyToOne(targetEntity: ElementType::class)]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["element:read","element:write","elementUser:read", "elementType:read"])]
    private $elementType;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(["element:read","element:write","elementUser:read"])]
    private $elementNationality;

    #[ORM\ManyToOne(targetEntity: Format::class)]
    #[Groups(["element:read","element:write"])]
    private $elementFormat;

    #[ORM\ManyToOne(targetEntity: Author::class)]
    #[Groups(["element:read","element:write","elementUser:read"])]
    private $elementAuthor;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Groups(["element:read","element:write"])]
    private $elementUserScored;

    #[ORM\Column(type: 'float', nullable: true)]
    #[Groups(["element:read","element:write"])]
    private $elementSumScore;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Groups(["element:read","element:write"])]
    private $elementCountUser;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Groups(["element:read","element:write"])]
    private $elementDuration;

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

    public function getElementAuthor(): ?Author
    {
        return $this->elementAuthor;
    }

    public function setElementAuthor(?Author $elementAuthor): self
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

    public function getElementStatus(): ?string
    {
        return $this->elementStatus;
    }

    public function setElementStatus(?string $elementStatus): self
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
    public function getElementDateRelease(): ?\DateTimeInterface
    {
        return $this->elementDateRelease;
    }

    public function setElementDateRelease(?\DateTimeInterface $elementDateRelease): self
    {
        $this->elementDateRelease = $elementDateRelease;

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

    public function getElementNationality(): ?string
    {
        return $this->elementNationality;
    }

    public function setElementNationality(?string $elementNationality): self
    {
        $this->elementNationality = $elementNationality;

        return $this;
    }

    public function getElementFormat(): ?Format
    {
        return $this->elementFormat;
    }

    public function setElementFormat(?Format $elementFormat): self
    {
        $this->elementFormat = $elementFormat;

        return $this;
    }

    public function getElementUserScored(): ?int
    {
        return $this->elementUserScored;
    }

    public function setElementUserScored(?int $elementUserScored): self
    {
        $this->elementUserScored = $elementUserScored;

        return $this;
    }

    public function getElementSumScore(): ?float
    {
        return $this->elementSumScore;
    }

    public function setElementSumScore(?float $elementSumScore): self
    {
        $this->elementSumScore = $elementSumScore;

        return $this;
    }

    public function getElementCountUser(): ?int
    {
        return $this->elementCountUser;
    }

    public function setElementCountUser(?int $elementCountUser): self
    {
        $this->elementCountUser = $elementCountUser;

        return $this;
    }

    public function getElementDuration(): ?int
    {
        return $this->elementDuration;
    }

    public function setElementDuration(?int $elementDuration): self
    {
        $this->elementDuration = $elementDuration;

        return $this;
    }


}

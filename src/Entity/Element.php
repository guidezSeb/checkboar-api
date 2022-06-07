<?php

namespace App\Entity;

use App\Repository\ElementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: ElementRepository::class)]
#[ApiResource]
class Element
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $elementId;

    #[ORM\Column(type: 'string', length: 255)]
    private $elementName;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $elementAuthor;

    #[ORM\Column(type: 'string', length: 255)]
    private $elementDescription;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $elementStatus;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $elementIsFavorite;

    #[ORM\Column(type: 'string', length: 255)]
    private $elementCoverImage;

    #[ORM\Column(type: 'array', nullable: true)]
    private $elementRelation = [];

    #[ORM\Column(type: 'array', nullable: true)]
    private $elementTag = [];

    #[ORM\Column(type: 'date', nullable: true)]
    private $elementDateRelease;

    #[ORM\OneToMany(mappedBy: 'element', targetEntity: UserElement::class, orphanRemoval: true)]
    private $userElements;

    #[ORM\OneToOne(mappedBy: 'element', targetEntity: Book::class, cascade: ['persist', 'remove'])]
    private $book;

    #[ORM\OneToOne(mappedBy: 'element', targetEntity: Movie::class, cascade: ['persist', 'remove'])]
    private $movie;

    #[ORM\OneToOne(mappedBy: 'element', targetEntity: Manga::class, cascade: ['persist', 'remove'])]
    private $manga;

    public function __construct()
    {
        $this->userElements = new ArrayCollection();
    }

   


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    public function setElementId(int $elementId): self
    {
        $this->elementId = $elementId;

        return $this;
    }

    public function getElementName(): ?string
    {
        return $this->elementName;
    }

    public function setElementName(string $elementName): self
    {
        $this->elementName = $elementName;

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

    public function setElementDescription(string $elementDescription): self
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

    public function getElementIsFavorite(): ?bool
    {
        return $this->elementIsFavorite;
    }

    public function setElementIsFavorite(?bool $elementIsFavorite): self
    {
        $this->elementIsFavorite = $elementIsFavorite;

        return $this;
    }

    public function getElementCoverImage(): ?string
    {
        return $this->elementCoverImage;
    }

    public function setElementCoverImage(string $elementCoverImage): self
    {
        $this->elementCoverImage = $elementCoverImage;

        return $this;
    }

    public function getElementRelation(): ?array
    {
        return $this->elementRelation;
    }

    public function setElementRelation(?array $elementRelation): self
    {
        $this->elementRelation = $elementRelation;

        return $this;
    }

    public function getElementTag(): ?array
    {
        return $this->elementTag;
    }

    public function setElementTag(?array $elementTag): self
    {
        $this->elementTag = $elementTag;

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

    /**
     * @return Collection<int, UserElement>
     */
    public function getUserElements(): Collection
    {
        return $this->userElements;
    }

    public function addUserElement(UserElement $userElement): self
    {
        if (!$this->userElements->contains($userElement)) {
            $this->userElements[] = $userElement;
            $userElement->setElement($this);
        }

        return $this;
    }

    public function removeUserElement(UserElement $userElement): self
    {
        if ($this->userElements->removeElement($userElement)) {
            // set the owning side to null (unless already changed)
            if ($userElement->getElement() === $this) {
                $userElement->setElement(null);
            }
        }

        return $this;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function setBook(Book $book): self
    {
        // set the owning side of the relation if necessary
        if ($book->getElement() !== $this) {
            $book->setElement($this);
        }

        $this->book = $book;

        return $this;
    }

    public function getMovie(): ?Movie
    {
        return $this->movie;
    }

    public function setMovie(Movie $movie): self
    {
        // set the owning side of the relation if necessary
        if ($movie->getElement() !== $this) {
            $movie->setElement($this);
        }

        $this->movie = $movie;

        return $this;
    }

    public function getManga(): ?Manga
    {
        return $this->manga;
    }

    public function setManga(Manga $manga): self
    {
        // set the owning side of the relation if necessary
        if ($manga->getElement() !== $this) {
            $manga->setElement($this);
        }

        $this->manga = $manga;

        return $this;
    }

}

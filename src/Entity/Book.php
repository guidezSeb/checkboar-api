<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: BookRepository::class)]
#[ApiResource]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $bookDateRelease;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $bookChapterInProgress;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $bookChapterTotal;

    #[ORM\Column(type: 'integer')]
    private $bookId;

    #[ORM\OneToOne(inversedBy: 'book', targetEntity: Element::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $element;

    #[ORM\Column(type: 'string', length: 255)]
    private $bookName;

    #[ORM\Column(type: 'string', length: 255)]
    private $bookAuthor;

    #[ORM\Column(type: 'text', nullable: true)]
    private $bookDescription;

    #[ORM\Column(type: 'boolean')]
    private $bookStatus;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $bookCoverImage;

    #[ORM\Column(type: 'array', nullable: true)]
    private $bookTags = [];

    #[ORM\Column(type: 'array', nullable: true)]
    private $bookRelation = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookDateRelease(): ?\DateTimeInterface
    {
        return $this->bookDateRelease;
    }

    public function setBookDateRelease(\DateTimeInterface $bookDateRelease): self
    {
        $this->bookDateRelease = $bookDateRelease;

        return $this;
    }

    public function getBookChapterInProgress(): ?int
    {
        return $this->bookChapterInProgress;
    }

    public function setBookChapterInProgress(?int $bookChapterInProgress): self
    {
        $this->bookChapterInProgress = $bookChapterInProgress;

        return $this;
    }

    public function getBookChapterTotal(): ?int
    {
        return $this->bookChapterTotal;
    }

    public function setBookChapterTotal(?int $bookChapterTotal): self
    {
        $this->bookChapterTotal = $bookChapterTotal;

        return $this;
    }

    public function getBookId(): ?int
    {
        return $this->bookId;
    }

    public function setBookId(int $bookId): self
    {
        $this->bookId = $bookId;

        return $this;
    }

    public function getElement(): ?Element
    {
        return $this->element;
    }

    public function setElement(Element $element): self
    {
        $this->element = $element;

        return $this;
    }

    public function getBookName(): ?string
    {
        return $this->bookName;
    }

    public function setBookName(string $bookName): self
    {
        $this->bookName = $bookName;

        return $this;
    }

    public function getBookAuthor(): ?string
    {
        return $this->bookAuthor;
    }

    public function setBookAuthor(string $bookAuthor): self
    {
        $this->bookAuthor = $bookAuthor;

        return $this;
    }

    public function getBookDescription(): ?string
    {
        return $this->bookDescription;
    }

    public function setBookDescription(?string $bookDescription): self
    {
        $this->bookDescription = $bookDescription;

        return $this;
    }

    public function getBookStatus(): ?bool
    {
        return $this->bookStatus;
    }

    public function setBookStatus(bool $bookStatus): self
    {
        $this->bookStatus = $bookStatus;

        return $this;
    }

    public function getBookCoverImage(): ?string
    {
        return $this->bookCoverImage;
    }

    public function setBookCoverImage(?string $bookCoverImage): self
    {
        $this->bookCoverImage = $bookCoverImage;

        return $this;
    }

    public function getBookTags(): ?array
    {
        return $this->bookTags;
    }

    public function setBookTags(?array $bookTags): self
    {
        $this->bookTags = $bookTags;

        return $this;
    }

    public function getBookRelation(): ?array
    {
        return $this->bookRelation;
    }

    public function setBookRelation(?array $bookRelation): self
    {
        $this->bookRelation = $bookRelation;

        return $this;
    }

}

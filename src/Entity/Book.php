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
    private $bookDateStart;

    #[ORM\Column(type: 'date', nullable: true)]
    private $bookDateEnd;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $bookChapterInProgress;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $bookChapterTotal;

    #[ORM\Column(type: 'integer')]
    private $bookId;

    #[ORM\OneToOne(inversedBy: 'book', targetEntity: Element::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $element;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookDateStart(): ?\DateTimeInterface
    {
        return $this->bookDateStart;
    }

    public function setBookDateStart(\DateTimeInterface $bookDateStart): self
    {
        $this->bookDateStart = $bookDateStart;

        return $this;
    }

    public function getBookDateEnd(): ?\DateTimeInterface
    {
        return $this->bookDateEnd;
    }

    public function setBookDateEnd(?\DateTimeInterface $bookDateEnd): self
    {
        $this->bookDateEnd = $bookDateEnd;

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
}

<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $BookDateStart;

    #[ORM\Column(type: 'date', nullable: true)]
    private $BookDateEnd;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $BookChapterInProgress;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $BookChapterTotal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookDateStart(): ?\DateTimeInterface
    {
        return $this->BookDateStart;
    }

    public function setBookDateStart(\DateTimeInterface $BookDateStart): self
    {
        $this->BookDateStart = $BookDateStart;

        return $this;
    }

    public function getBookDateEnd(): ?\DateTimeInterface
    {
        return $this->BookDateEnd;
    }

    public function setBookDateEnd(?\DateTimeInterface $BookDateEnd): self
    {
        $this->BookDateEnd = $BookDateEnd;

        return $this;
    }

    public function getBookChapterInProgress(): ?int
    {
        return $this->BookChapterInProgress;
    }

    public function setBookChapterInProgress(?int $BookChapterInProgress): self
    {
        $this->BookChapterInProgress = $BookChapterInProgress;

        return $this;
    }

    public function getBookChapterTotal(): ?int
    {
        return $this->BookChapterTotal;
    }

    public function setBookChapterTotal(?int $BookChapterTotal): self
    {
        $this->BookChapterTotal = $BookChapterTotal;

        return $this;
    }
}

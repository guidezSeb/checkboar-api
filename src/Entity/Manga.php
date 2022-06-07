<?php

namespace App\Entity;

use App\Repository\MangaRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: MangaRepository::class)]
#[ApiResource]
class Manga
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date', nullable: true)]
    private $mangaDateStart;

    #[ORM\Column(type: 'date', nullable: true)]
    private $mangaDateEnd;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $mangaChapterTotal;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $mangaChapterInProgress;

    #[ORM\Column(type: 'integer')]
    private $mangaId;

    #[ORM\OneToOne(inversedBy: 'manga', targetEntity: Element::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $element;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMangaDateStart(): ?\DateTimeInterface
    {
        return $this->mangaDateStart;
    }

    public function setMangaDateStart(?\DateTimeInterface $mangaDateStart): self
    {
        $this->mangaDateStart = $mangaDateStart;

        return $this;
    }

    public function getMangaDateEnd(): ?\DateTimeInterface
    {
        return $this->mangaDateEnd;
    }

    public function setMangaDateEnd(?\DateTimeInterface $mangaDateEnd): self
    {
        $this->mangaDateEnd = $mangaDateEnd;

        return $this;
    }

    public function getMangaChapterTotal(): ?int
    {
        return $this->mangaChapterTotal;
    }

    public function setMangaChapterTotal(?int $mangaChapterTotal): self
    {
        $this->mangaChapterTotal = $mangaChapterTotal;

        return $this;
    }

    public function getMangaChapterInProgress(): ?int
    {
        return $this->mangaChapterInProgress;
    }

    public function setMangaChapterInProgress(?int $mangaChapterInProgress): self
    {
        $this->mangaChapterInProgress = $mangaChapterInProgress;

        return $this;
    }

    public function getMangaId(): ?int
    {
        return $this->mangaId;
    }

    public function setMangaId(int $mangaId): self
    {
        $this->mangaId = $mangaId;

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

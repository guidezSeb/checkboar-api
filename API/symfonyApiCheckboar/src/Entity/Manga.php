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
    private $MangaDateStart;

    #[ORM\Column(type: 'date', nullable: true)]
    private $MangaDateEnd;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $MangaChapterTotal;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $MangaChapterInProgress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMangaDateStart(): ?\DateTimeInterface
    {
        return $this->MangaDateStart;
    }

    public function setMangaDateStart(?\DateTimeInterface $MangaDateStart): self
    {
        $this->MangaDateStart = $MangaDateStart;

        return $this;
    }

    public function getMangaDateEnd(): ?\DateTimeInterface
    {
        return $this->MangaDateEnd;
    }

    public function setMangaDateEnd(?\DateTimeInterface $MangaDateEnd): self
    {
        $this->MangaDateEnd = $MangaDateEnd;

        return $this;
    }

    public function getMangaChapterTotal(): ?int
    {
        return $this->MangaChapterTotal;
    }

    public function setMangaChapterTotal(?int $MangaChapterTotal): self
    {
        $this->MangaChapterTotal = $MangaChapterTotal;

        return $this;
    }

    public function getMangaChapterInProgress(): ?int
    {
        return $this->MangaChapterInProgress;
    }

    public function setMangaChapterInProgress(?int $MangaChapterInProgress): self
    {
        $this->MangaChapterInProgress = $MangaChapterInProgress;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
#[ApiResource]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date', nullable: true)]
    private $MovieDateSeen;

    #[ORM\Column(type: 'integer')]
    private $MovieId;

    #[ORM\OneToOne(inversedBy: 'movie', targetEntity: Element::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $element;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieDateSeen(): ?\DateTimeInterface
    {
        return $this->MovieDateSeen;
    }

    public function setMovieDateSeen(?\DateTimeInterface $MovieDateSeen): self
    {
        $this->MovieDateSeen = $MovieDateSeen;

        return $this;
    }

    public function getMovieId(): ?int
    {
        return $this->MovieId;
    }

    public function setMovieId(int $MovieId): self
    {
        $this->MovieId = $MovieId;

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

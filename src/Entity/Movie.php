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
    private $movieDateSeen;

    #[ORM\Column(type: 'integer')]
    private $movieId;

    #[ORM\OneToOne(inversedBy: 'movie', targetEntity: Element::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $element;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieDateSeen(): ?\DateTimeInterface
    {
        return $this->movieDateSeen;
    }

    public function setMovieDateSeen(?\DateTimeInterface $movieDateSeen): self
    {
        $this->movieDateSeen = $movieDateSeen;

        return $this;
    }

    public function getMovieId(): ?int
    {
        return $this->movieId;
    }

    public function setMovieId(int $movieId): self
    {
        $this->movieId = $movieId;

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

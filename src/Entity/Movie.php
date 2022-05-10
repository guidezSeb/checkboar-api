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
    private $moviedateRelease;

    #[ORM\Column(type: 'string', length: 255)]
    private $movieName;

    #[ORM\Column(type: 'string', length: 255)]
    private $movieDirector;

    #[ORM\Column(type: 'text', nullable: true)]
    private $movieDescription;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $movieStatus;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $movieCoverImage;

    #[ORM\Column(type: 'array', nullable: true)]
    private $movieTags = [];

    #[ORM\Column(type: 'array', nullable: true)]
    private $movieRelation = [];




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMoviedateRelease(): ?\DateTimeInterface
    {
        return $this->moviedateRelease;
    }

    public function setMoviedateRelease(?\DateTimeInterface $oviedateRelease): self
    {
        $this->moviedateRelease = $oviedateRelease;

        return $this;
    }

    public function getMovieName(): ?string
    {
        return $this->movieName;
    }

    public function setMovieName(string $movieName): self
    {
        $this->movieName = $movieName;

        return $this;
    }

    public function getMovieDirector(): ?string
    {
        return $this->movieDirector;
    }

    public function setMovieDirector(string $movieDirector): self
    {
        $this->movieDirector = $movieDirector;

        return $this;
    }

    public function getMovieDescription(): ?string
    {
        return $this->movieDescription;
    }

    public function setMovieDescription(?string $movieDescription): self
    {
        $this->movieDescription = $movieDescription;

        return $this;
    }

    public function getMovieStatus(): ?bool
    {
        return $this->movieStatus;
    }

    public function setMovieStatus(?bool $movieStatus): self
    {
        $this->movieStatus = $movieStatus;

        return $this;
    }

    public function getMovieCoverImage(): ?string
    {
        return $this->movieCoverImage;
    }

    public function setMovieCoverImage(?string $movieCoverImage): self
    {
        $this->movieCoverImage = $movieCoverImage;

        return $this;
    }

    public function getMovieTags(): ?array
    {
        return $this->movieTags;
    }

    public function setMovieTags(?array $movieTags): self
    {
        $this->movieTags = $movieTags;

        return $this;
    }

    public function getMovieRelation(): ?array
    {
        return $this->movieRelation;
    }

    public function setMovieRelation(?array $movieRelation): self
    {
        $this->movieRelation = $movieRelation;

        return $this;
    }

   
}

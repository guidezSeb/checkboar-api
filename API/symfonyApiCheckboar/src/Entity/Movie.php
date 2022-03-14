<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date', nullable: true)]
    private $MovieDateSeen;

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
}

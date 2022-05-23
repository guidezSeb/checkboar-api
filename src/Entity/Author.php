<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AuthorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthorRepository::class)]
#[ApiResource]
class Author
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $authorName;

    #[ORM\Column(type: 'string', length: 255)]
    private $authorFirstname;

    #[ORM\Column(type: 'date', nullable: true)]
    private $authorBirthDate;

    #[ORM\Column(type: 'date', nullable: true)]
    private $authorDeathDate;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $authorImage;

    #[ORM\ManyToOne(targetEntity: Nationality::class)]
    private $authorNationality;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getAuthorFirstname(): ?string
    {
        return $this->authorFirstname;
    }

    public function setAuthorFirstname(string $authorFirstname): self
    {
        $this->authorFirstname = $authorFirstname;

        return $this;
    }

    public function getAuthorBirthDate(): ?\DateTimeInterface
    {
        return $this->authorBirthDate;
    }

    public function setAuthorBirthDate(?\DateTimeInterface $authorBirthDate): self
    {
        $this->authorBirthDate = $authorBirthDate;

        return $this;
    }

    public function getAuthorDeathDate(): ?\DateTimeInterface
    {
        return $this->authorDeathDate;
    }

    public function setAuthorDeathDate(?\DateTimeInterface $authorDeathDate): self
    {
        $this->authorDeathDate = $authorDeathDate;

        return $this;
    }

    public function getAuthorImage(): ?string
    {
        return $this->authorImage;
    }

    public function setAuthorImage(?string $authorImage): self
    {
        $this->authorImage = $authorImage;

        return $this;
    }

    public function getAuthorNationality(): ?Nationality
    {
        return $this->authorNationality;
    }

    public function setAuthorNationality(?Nationality $authorNationality): self
    {
        $this->authorNationality = $authorNationality;

        return $this;
    }
}
<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\NationalityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NationalityRepository::class)]
#[ApiResource]
class Nationality
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nationalityName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNationalityName(): ?string
    {
        return $this->nationalityName;
    }

    public function setNationalityName(string $nationalityName): self
    {
        $this->nationalityName = $nationalityName;

        return $this;
    }
}

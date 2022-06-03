<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserElementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserElementRepository::class)]
#[ApiResource(attributes: [
    'normalization_context' => ['groups' => ['elementUser:read']],
    'denormalization_context' => ['groups' => ['elementUser:write']],
])]
class UserElement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float', nullable: true)]
    private $score;

    #[ORM\Column(type: 'string', nullable: true)]
    private $userStatus;

    #[ORM\Column(type: 'bool', nullable: true)]
    private $userFavorite = [];



    #[ORM\Column(type: 'date', nullable: true)]
    private $userDatestart;

    #[ORM\Column(type: 'date', nullable: true)]
    private $userdateEnd;

    #[ORM\Column(type: 'date', nullable: true)]
    private $userDateSeen;



    #[ORM\Column(type: 'integer', nullable: true)]
    private $userProgression;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'userElements')]
    #[ORM\JoinColumn(nullable: false)]
    private $userId;

    #[ORM\ManyToOne(targetEntity: Element::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $elementId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(?float $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getUserStatus(): ?string
    {
        return $this->userStatus;
    }

    public function setUserStatus(?string $userStatus): self
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    public function getUserFavorite(): ?bool
    {
        return $this->userFavorite;
    }

    public function setUserFavorite(?bool $userFavorite): self
    {
        $this->userFavorite = $userFavorite;

        return $this;
    }

   

    public function getUserDatestart(): ?\DateTimeInterface
    {
        return $this->userDatestart;
    }

    public function setUserDatestart(?\DateTimeInterface $userDatestart): self
    {
        $this->userDatestart = $userDatestart;

        return $this;
    }

    public function getUserdateEnd(): ?\DateTimeInterface
    {
        return $this->userdateEnd;
    }

    public function setUserdateEnd(?\DateTimeInterface $userdateEnd): self
    {
        $this->userdateEnd = $userdateEnd;

        return $this;
    }

    public function getUserDateSeen(): ?\DateTimeInterface
    {
        return $this->userDateSeen;
    }

    public function setUserDateSeen(?\DateTimeInterface $userDateSeen): self
    {
        $this->userDateSeen = $userDateSeen;

        return $this;
    }

    public function getUserProgression(): ?int
    {
        return $this->userProgression;
    }

    public function setUserProgression(?int $userProgression): self
    {
        $this->userProgression = $userProgression;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getElementId(): ?Element
    {
        return $this->elementId;
    }

    public function setElementId(?Element $elementId): self
    {
        $this->elementId = $elementId;

        return $this;
    }
}

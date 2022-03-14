<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $UserId;

    #[ORM\Column(type: 'string', length: 255)]
    private $Login;

    #[ORM\Column(type: 'string', length: 255)]
    private $Password;

    #[ORM\Column(type: 'string', length: 255)]
    private $UserImage;

    #[ORM\Column(type: 'integer')]
    private $IdFriend;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->UserId;
    }

    public function setUserId(int $UserId): self
    {
        $this->UserId = $UserId;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $Login): self
    {
        $this->Login = $Login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $Password): self
    {
        $this->password = $Password;

        return $this;
    }

    public function getUserImage(): ?string
    {
        return $this->UserImage;
    }

    public function setUserImage(string $UserImage): self
    {
        $this->UserImage = $UserImage;

        return $this;
    }

    public function getIdFriend(): ?int
    {
        return $this->IdFriend;
    }

    public function setIdFriend(int $IdFriend): self
    {
        $this->IdFriend = $IdFriend;

        return $this;
    }
}

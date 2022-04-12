<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource]
#[ORM\Table(name: "`user`")]
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

  
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Comment::class, orphanRemoval: true)]
    private $comments;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: UserElement::class, orphanRemoval: true)]
    private $userElements;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->userElements = new ArrayCollection();
    }

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


    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setUser($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, UserElement>
     */
    public function getUserElements(): Collection
    {
        return $this->userElements;
    }

    public function addUserElement(UserElement $userElement): self
    {
        if (!$this->userElements->contains($userElement)) {
            $this->userElements[] = $userElement;
            $userElement->setUser($this);
        }

        return $this;
    }

    public function removeUserElement(UserElement $userElement): self
    {
        if ($this->userElements->removeElement($userElement)) {
            // set the owning side to null (unless already changed)
            if ($userElement->getUser() === $this) {
                $userElement->setUser(null);
            }
        }

        return $this;
    }
}

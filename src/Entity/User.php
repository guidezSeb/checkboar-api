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

  
    #[ORM\Column(type: 'string', length: 255)]
    private $login;

    #[ORM\Column(type: 'string', length: 255)]
    private $password;

    #[ORM\Column(type: 'string', length: 255)]
    private $userImage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $idFriend;

  
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

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getUserImage(): ?string
    {
        return $this->userImage;
    }

    public function setUserImage(string $userImage): self
    {
        $this->userImage = $userImage;

        return $this;
    }

    public function getIdFriend(): ?int
    {
        return $this->idFriend;
    }

    public function setIdFriend(int $idFriend): self
    {
        $this->idFriend = $idFriend;

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

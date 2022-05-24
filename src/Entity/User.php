<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource()]
#[ORM\Table(name: "`user`")]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

   
    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $username;

  
    #[ORM\Column(type: 'json')]
    private $roles = [];

 
    #[ORM\Column(type: 'string')]
    private $password;


    #[ORM\Column(type: 'string', length: 255)]
    private $userImage;
    

    #[ORM\OneToMany(mappedBy: 'userId', targetEntity: Comment::class, orphanRemoval: true)]
    private $userComment;

    #[ORM\OneToMany(mappedBy: 'userId', targetEntity: UserElement::class, orphanRemoval: true)]
    private $userElements;


    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $userCompleteName;


    #[ORM\Column(type: 'boolean', nullable: true)]
    private $userGender;

   
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $email;
    
    public function __construct()
    {
        $this->userComment = new ArrayCollection();
        $this->userElements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

 
    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
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

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }


    /**
     * @return Collection<int, Comment>
     */
    public function getUserComment(): Collection
    {
        return $this->userComment;
    }

    public function addUserComment(Comment $userComment): self
    {
        if (!$this->userComment->contains($userComment)) {
            $this->userComment[] = $userComment;
            $userComment->setUserId($this);
        }

        return $this;
    }

    public function removeUserComment(Comment $userComment): self
    {
        if ($this->userComment->removeElement($userComment)) {
            // set the owning side to null (unless already changed)
            if ($userComment->getUserId() === $this) {
                $userComment->setUserId(null);
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
            $userElement->setUserId($this);
        }

        return $this;
    }

    public function removeUserElement(UserElement $userElement): self
    {
        if ($this->userElements->removeElement($userElement)) {
            // set the owning side to null (unless already changed)
            if ($userElement->getUserId() === $this) {
                $userElement->setUserId(null);
            }
        }

        return $this;
    }

    public function getUserCompleteName(): ?string
    {
        return $this->userCompleteName;
    }

    public function setUserCompleteName(?string $userCompleteName): self
    {
        $this->userCompleteName = $userCompleteName;

        return $this;
    }

 

    public function getUserGender(): ?bool
    {
        return $this->userGender;
    }

    public function setUserGender(?bool $userGender): self
    {
        $this->userGender = $userGender;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }



}

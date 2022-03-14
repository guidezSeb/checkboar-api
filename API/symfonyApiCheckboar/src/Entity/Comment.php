<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Text;

    #[ORM\Column(type: 'integer')]
    private $CommentID;

    #[ORM\Column(type: 'datetime')]
    private $CommentDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->Text;
    }

    public function setText(string $Text): self
    {
        $this->Text = $Text;

        return $this;
    }

    public function getCommentID(): ?int
    {
        return $this->CommentID;
    }

    public function setCommentID(int $CommentID): self
    {
        $this->CommentID = $CommentID;

        return $this;
    }

    public function getCommentDate(): ?\DateTimeInterface
    {
        return $this->CommentDate;
    }

    public function setCommentDate(\DateTimeInterface $CommentDate): self
    {
        $this->CommentDate = $CommentDate;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExaminationRepository")
 */
class Examination
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $result;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UserCard", inversedBy="examinations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userCard;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ExaminationComment", mappedBy="examination")
     */
    private $comment;

    public function __construct()
    {
        $this->comment = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getUserCard(): ?UserCard
    {
        return $this->userCard;
    }

    public function setUserCard(?UserCard $userCard): self
    {
        $this->userCard = $userCard;

        return $this;
    }

    /**
     * @return Collection|ExaminationComment[]
     */
    public function getComment(): Collection
    {
        return $this->comment;
    }

    public function addComment(ExaminationComment $comment): self
    {
        if (!$this->comment->contains($comment)) {
            $this->comment[] = $comment;
            $comment->setExamination($this);
        }

        return $this;
    }

    public function removeComment(ExaminationComment $comment): self
    {
        if ($this->comment->contains($comment)) {
            $this->comment->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getExamination() === $this) {
                $comment->setExamination(null);
            }
        }

        return $this;
    }
}

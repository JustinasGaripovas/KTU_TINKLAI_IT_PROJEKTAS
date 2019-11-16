<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserCardRepository")
 */
class UserCard
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="userCard", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Examination", mappedBy="userCard")
     */
    private $examinations;

    public function __toString()
    {
        $user = $this->getUser()->getUsername();

        return $user;
    }

    public function __construct()
    {
        $this->examinations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Examination[]
     */
    public function getExaminations(): Collection
    {
        return $this->examinations;
    }

    public function addExamination(Examination $examination): self
    {
        if (!$this->examinations->contains($examination)) {
            $this->examinations[] = $examination;
            $examination->setUserCard($this);
        }

        return $this;
    }

    public function removeExamination(Examination $examination): self
    {
        if ($this->examinations->contains($examination)) {
            $this->examinations->removeElement($examination);
            // set the owning side to null (unless already changed)
            if ($examination->getUserCard() === $this) {
                $examination->setUserCard(null);
            }
        }

        return $this;
    }
}

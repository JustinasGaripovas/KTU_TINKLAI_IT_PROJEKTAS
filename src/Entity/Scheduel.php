<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScheduelRepository")
 */
class Scheduel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $day;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ScheduelSlot", mappedBy="scheduel")
     */
    private $timeSlots;

    public function __construct()
    {
        $this->timeSlots = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(string $day): self
    {
        $this->day = $day;

        return $this;
    }

    /**
     * @return Collection|ScheduelSlot[]
     */
    public function getTimeSlots(): Collection
    {
        return $this->timeSlots;
    }

    public function addTimeSlot(ScheduelSlot $timeSlot): self
    {
        if (!$this->timeSlots->contains($timeSlot)) {
            $this->timeSlots[] = $timeSlot;
            $timeSlot->setScheduel($this);
        }

        return $this;
    }

    public function removeTimeSlot(ScheduelSlot $timeSlot): self
    {
        if ($this->timeSlots->contains($timeSlot)) {
            $this->timeSlots->removeElement($timeSlot);
            // set the owning side to null (unless already changed)
            if ($timeSlot->getScheduel() === $this) {
                $timeSlot->setScheduel(null);
            }
        }

        return $this;
    }
}

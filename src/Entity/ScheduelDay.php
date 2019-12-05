<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScheduelDayRepository")
 */
class ScheduelDay
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Day;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\ScheduelSlot", inversedBy="scheduelDays")
     */
    private $slots;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Scheduel", mappedBy="ScheduleDays")
     */
    private $scheduels;

    public function __construct()
    {
        $this->slots = new ArrayCollection();
        $this->scheduels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?int
    {
        return $this->Day;
    }

    public function setDay(int $Day): self
    {
        $this->Day = $Day;

        return $this;
    }

    /**
     * @return Collection|ScheduelSlot[]
     */
    public function getSlots(): Collection
    {
        return $this->slots;
    }

    public function addSlot(ScheduelSlot $slot): self
    {
        if (!$this->slots->contains($slot)) {
            $this->slots[] = $slot;
        }

        return $this;
    }

    public function removeSlot(ScheduelSlot $slot): self
    {
        if ($this->slots->contains($slot)) {
            $this->slots->removeElement($slot);
        }

        return $this;
    }

    /**
     * @return Collection|Scheduel[]
     */
    public function getScheduels(): Collection
    {
        return $this->scheduels;
    }

    public function addScheduel(Scheduel $scheduel): self
    {
        if (!$this->scheduels->contains($scheduel)) {
            $this->scheduels[] = $scheduel;
            $scheduel->addScheduleDay($this);
        }

        return $this;
    }

    public function removeScheduel(Scheduel $scheduel): self
    {
        if ($this->scheduels->contains($scheduel)) {
            $this->scheduels->removeElement($scheduel);
            $scheduel->removeScheduleDay($this);
        }

        return $this;
    }
}

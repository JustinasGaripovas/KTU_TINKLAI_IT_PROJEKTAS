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
     * @ORM\ManyToMany(targetEntity="App\Entity\ScheduelDay", inversedBy="scheduels", cascade={"persist"})
     */
    private $ScheduleDays;

    public function __construct()
    {
        $this->slots = new ArrayCollection();
        $this->ScheduleDays = new ArrayCollection();
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
     * @return Collection|ScheduelDay[]
     */
    public function getScheduleDays(): Collection
    {
        return $this->ScheduleDays;
    }

    public function addScheduleDay(ScheduelDay $scheduleDay): self
    {
        if (!$this->ScheduleDays->contains($scheduleDay)) {
            $this->ScheduleDays[] = $scheduleDay;
        }

        return $this;
    }

    public function removeScheduleDay(ScheduelDay $scheduleDay): self
    {
        if ($this->ScheduleDays->contains($scheduleDay)) {
            $this->ScheduleDays->removeElement($scheduleDay);
        }

        return $this;
    }

}

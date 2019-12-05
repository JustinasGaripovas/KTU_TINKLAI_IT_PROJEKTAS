<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScheduelSlotRepository")
 */
class ScheduelSlot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\DateTime
     * @ORM\Column(type="time")
     */
    private $startTime;

    /**
     * @Assert\DateTime
     * @ORM\Column(type="time")
     */
    private $endTime;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\ScheduelDay", mappedBy="slots")
     */
    private $scheduelDays;

    public function __construct()
    {
        $this->scheduels = new ArrayCollection();
        $this->scheduelDays = new ArrayCollection();
    }


    public function __toString()
    {
        /** var \DateTime startTime */
        return "{$this->startTime->format('H:i')} : {$this->endTime->format('H:i')}";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return Collection|ScheduelDay[]
     */
    public function getScheduelDays(): Collection
    {
        return $this->scheduelDays;
    }

    public function addScheduelDay(ScheduelDay $scheduelDay): self
    {
        if (!$this->scheduelDays->contains($scheduelDay)) {
            $this->scheduelDays[] = $scheduelDay;
            $scheduelDay->addSlot($this);
        }

        return $this;
    }

    public function removeScheduelDay(ScheduelDay $scheduelDay): self
    {
        if ($this->scheduelDays->contains($scheduelDay)) {
            $this->scheduelDays->removeElement($scheduelDay);
            $scheduelDay->removeSlot($this);
        }

        return $this;
    }

}
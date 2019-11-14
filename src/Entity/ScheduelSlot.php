<?php
namespace App\Entity;

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
     * @ORM\Column(type="datetime")
     */
    private $startTime;

    /**
     * @Assert\DateTime
     * @ORM\Column(type="datetime")
     */
    private $endTime;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Scheduel", inversedBy="timeSlots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $scheduel;

    public function __toString()
    {
        /** var \DateTime startTime */
        return "{$this->startTime->format('H')} : {$this->endTime->format('H')}";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeInterface $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }

    public function getScheduel(): ?Scheduel
    {
        return $this->scheduel;
    }

    public function setScheduel(?Scheduel $scheduel): self
    {
        $this->scheduel = $scheduel;

        return $this;
    }
}
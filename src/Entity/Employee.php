<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class Employee implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=50)
     */
    private $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="integer")
     */
    private $phone;

    private $plain_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $encoded_password;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="array")
     */
    private $roles = [];

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Scheduel", cascade={"persist", "remove"})
     */
    private $Schedule;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Examination", mappedBy="employee")
     */
    private $examination;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $specialty;

    public function __construct()
    {
        $this->roles = array('ROLE_EMPLOYEE');
        $this->examination = new ArrayCollection();
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plain_password;
    }

    public function setPlainPassword(string $plain_password): self
    {
        $this->plain_password = $plain_password;

        return $this;
    }

    public function getEncodedPassword(): ?string
    {
        return $this->encoded_password;
    }

    public function setEncodedPassword(string $encoded_password): self
    {
        $this->encoded_password = $encoded_password;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string|null The encoded password if any
     */
    public function getPassword()
    {
        return $this->encoded_password;
    }

    public function setPassword($password)
    {
        $this->encoded_password = $password;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        return null;
    }

    public function getSchedule(): ?Scheduel
    {
        return $this->Schedule;
    }

    public function setSchedule(?Scheduel $Schedule): self
    {
        $this->Schedule = $Schedule;

        return $this;
    }

    /**
     * @return Collection|Examination[]
     */
    public function getExamination(): Collection
    {
        return $this->examination;
    }

    public function addExamination(Examination $examination): self
    {
        if (!$this->examination->contains($examination)) {
            $this->examination[] = $examination;
            $examination->setEmployee($this);
        }

        return $this;
    }

    public function removeExamination(Examination $examination): self
    {
        if ($this->examination->contains($examination)) {
            $this->examination->removeElement($examination);
            // set the owning side to null (unless already changed)
            if ($examination->getEmployee() === $this) {
                $examination->setEmployee(null);
            }
        }

        return $this;
    }

    public function getSpecialty(): ?string
    {
        return $this->specialty;
    }

    public function setSpecialty(?string $specialty): self
    {
        $this->specialty = $specialty;

        return $this;
    }
}

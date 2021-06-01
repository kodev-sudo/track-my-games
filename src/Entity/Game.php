<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GameRepository::class)
 */
class Game
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $background_image;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duration;

    /**
     * @ORM\OneToMany(targetEntity=Developer::class, mappedBy="game")
     */
    private $developer;

    public function __construct()
    {
        $this->developer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getBackgroundImage(): ?string
    {
        return $this->background_image;
    }

    public function setBackgroundImage(?string $background_image): self
    {
        $this->background_image = $background_image;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return Collection|Developer[]
     */
    public function getDeveloper(): Collection
    {
        return $this->developer;
    }

    public function addDeveloper(Developer $developer): self
    {
        if (!$this->developer->contains($developer)) {
            $this->developer[] = $developer;
            $developer->setGame($this);
        }

        return $this;
    }

    public function removeDeveloper(Developer $developer): self
    {
        if ($this->developer->removeElement($developer)) {
            // set the owning side to null (unless already changed)
            if ($developer->getGame() === $this) {
                $developer->setGame(null);
            }
        }

        return $this;
    }
}

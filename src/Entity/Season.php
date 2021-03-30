<?php

namespace App\Entity;

use App\Repository\SeasonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SeasonRepository::class)
 */
class Season
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Week::class, mappedBy="season", orphanRemoval=true)
     */
    private $weeks;

    /**
     * @ORM\Column(type="datetime")
     */
    private $draftDate;

    public function __construct()
    {
        $this->weeks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Collection|Week[]
     */
    public function getWeeks(): Collection
    {
        return $this->weeks;
    }

    public function addWeek(Week $week): self
    {
        if (!$this->weeks->contains($week)) {
            $this->weeks[] = $week;
            $week->setSeason($this);
        }

        return $this;
    }

    public function removeWeek(Week $week): self
    {
        if ($this->weeks->removeElement($week)) {
            // set the owning side to null (unless already changed)
            if ($week->getSeason() === $this) {
                $week->setSeason(null);
            }
        }

        return $this;
    }

    public function getDraftDate(): ?\DateTimeInterface
    {
        return $this->draftDate;
    }

    public function setDraftDate(\DateTimeInterface $draftDate): self
    {
        $this->draftDate = $draftDate;

        return $this;
    }
}

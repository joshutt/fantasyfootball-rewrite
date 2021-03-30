<?php

namespace App\Entity;

use App\Repository\NflTeamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NflTeamRepository::class)
 */
class NflTeam
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nickname;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $abbrev;

    /**
     * @ORM\OneToMany(targetEntity=NflFormerNames::class, mappedBy="nflTeam", orphanRemoval=true)
     */
    private $nflFormerNames;

    public function __construct()
    {
        $this->nflFormerNames = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getAbbrev(): ?string
    {
        return $this->abbrev;
    }

    public function setAbbrev(string $abbrev): self
    {
        $this->abbrev = $abbrev;

        return $this;
    }

    /**
     * @return Collection|NflFormerNames[]
     */
    public function getNflFormerNames(): Collection
    {
        return $this->nflFormerNames;
    }

    public function addNflFormerName(NflFormerNames $nflFormerName): self
    {
        if (!$this->nflFormerNames->contains($nflFormerName)) {
            $this->nflFormerNames[] = $nflFormerName;
            $nflFormerName->setNflTeam($this);
        }

        return $this;
    }

    public function removeNflFormerName(NflFormerNames $nflFormerName): self
    {
        if ($this->nflFormerNames->removeElement($nflFormerName)) {
            // set the owning side to null (unless already changed)
            if ($nflFormerName->getNflTeam() === $this) {
                $nflFormerName->setNflTeam(null);
            }
        }

        return $this;
    }

}

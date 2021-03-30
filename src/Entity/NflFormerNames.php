<?php

namespace App\Entity;

use App\Repository\NflFormerNamesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NflFormerNamesRepository::class)
 */
class NflFormerNames
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=NflTeam::class, inversedBy="nflFormerNames")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nflTeam;

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
     * @ORM\Column(type="date")
     */
    private $startYear;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $endYear;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNflTeam(): ?NflTeam
    {
        return $this->nflTeam;
    }

    public function setNflTeam(?NflTeam $nflTeam): self
    {
        $this->nflTeam = $nflTeam;

        return $this;
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

    public function getStartYear(): ?\DateTimeInterface
    {
        return $this->startYear;
    }

    public function setStartYear(\DateTimeInterface $startYear): self
    {
        $this->startYear = $startYear;

        return $this;
    }

    public function getEndYear(): ?\DateTimeInterface
    {
        return $this->endYear;
    }

    public function setEndYear(?\DateTimeInterface $endYear): self
    {
        $this->endYear = $endYear;

        return $this;
    }
}

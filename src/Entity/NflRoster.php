<?php

namespace App\Entity;

use App\Repository\NflRosterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NflRosterRepository::class)
 */
class NflRoster
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Player::class, inversedBy="nflRosters")
     * @ORM\JoinColumn(nullable=false)
     */
    private $player;

    /**
     * @ORM\ManyToOne(targetEntity=NflTeam::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $team;


    /**
     * @ORM\Column(type="datetime")
     */
    private $dateOn;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateOff;

    /**
     * @ORM\ManyToOne(targetEntity=Position::class)
     */
    private $pos;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayer(): ?Player
    {
        return $this->player;
    }

    public function setPlayer(?Player $player): self
    {
        $this->player = $player;

        return $this;
    }

    public function getTeam(): ?NflTeam
    {
        return $this->team;
    }

    public function setTeam(?NflTeam $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getDateOn(): ?\DateTimeInterface
    {
        return $this->dateOn;
    }

    public function setDateOn(\DateTimeInterface $dateOn): self
    {
        $this->dateOn = $dateOn;

        return $this;
    }

    public function getDateOff(): ?\DateTimeInterface
    {
        return $this->dateOff;
    }

    public function setDateOff(?\DateTimeInterface $dateOff): self
    {
        $this->dateOff = $dateOff;

        return $this;
    }

    public function getPos(): ?Position
    {
        return $this->pos;
    }

    public function setPos(?Position $pos): self
    {
        $this->pos = $pos;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\NflDraftPickRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NflDraftPickRepository::class)
 */
class NflDraftPick
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $year;

    /**
     * @ORM\Column(type="integer")
     */
    private $round;

    /**
     * @ORM\Column(type="integer")
     */
    private $pick;

    /**
     * @ORM\ManyToOne(targetEntity=NflTeam::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $team;

    /**
     * @ORM\OneToOne(targetEntity=Player::class, inversedBy="nflDraftPick", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $player;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getRound(): ?int
    {
        return $this->round;
    }

    public function setRound(int $round): self
    {
        $this->round = $round;

        return $this;
    }

    public function getPick(): ?int
    {
        return $this->pick;
    }

    public function setPick(int $pick): self
    {
        $this->pick = $pick;

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

    public function getPlayer(): ?Player
    {
        return $this->player;
    }

    public function setPlayer(Player $player): self
    {
        $this->player = $player;

        return $this;
    }
}

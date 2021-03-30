<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlayerRepository::class)
 */
class Player
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $firstName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $height;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $weight;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dob;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number;

    /**
     * @ORM\OneToOne(targetEntity=NflDraftPick::class, mappedBy="player", cascade={"persist", "remove"})
     */
    private $nflDraftPick;

    /**
     * @ORM\ManyToOne(targetEntity=Position::class)
     */
    private $pos;

    /**
     * @ORM\OneToMany(targetEntity=NflRoster::class, mappedBy="player", orphanRemoval=true)
     */
    private $nflRosters;

    /**
     * @ORM\OneToMany(targetEntity=PlayerExtId::class, mappedBy="player", orphanRemoval=true)
     */
    private $playerExtIds;

    /**
     * @ORM\OneToMany(targetEntity=PlayerStats::class, mappedBy="player", orphanRemoval=true)
     */
    private $playerStats;

    /**
     * @ORM\OneToMany(targetEntity=PlayerScore::class, mappedBy="player", orphanRemoval=true)
     */
    private $playerScores;

    public function __construct()
    {
        $this->nflRosters = new ArrayCollection();
        $this->playerExtIds = new ArrayCollection();
        $this->playerStats = new ArrayCollection();
        $this->playerScores = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getDob(): ?\DateTimeInterface
    {
        return $this->dob;
    }

    public function setDob(?\DateTimeInterface $dob): self
    {
        $this->dob = $dob;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getNflDraftPick(): ?NflDraftPick
    {
        return $this->nflDraftPick;
    }

    public function setNflDraftPick(NflDraftPick $nflDraftPick): self
    {
        // set the owning side of the relation if necessary
        if ($nflDraftPick->getPlayer() !== $this) {
            $nflDraftPick->setPlayer($this);
        }

        $this->nflDraftPick = $nflDraftPick;

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

    /**
     * @return Collection|NflRoster[]
     */
    public function getNflRosters(): Collection
    {
        return $this->nflRosters;
    }

    public function addNflRoster(NflRoster $nflRoster): self
    {
        if (!$this->nflRosters->contains($nflRoster)) {
            $this->nflRosters[] = $nflRoster;
            $nflRoster->setPlayer($this);
        }

        return $this;
    }

    public function removeNflRoster(NflRoster $nflRoster): self
    {
        if ($this->nflRosters->removeElement($nflRoster)) {
            // set the owning side to null (unless already changed)
            if ($nflRoster->getPlayer() === $this) {
                $nflRoster->setPlayer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PlayerExtId[]
     */
    public function getPlayerExtIds(): Collection
    {
        return $this->playerExtIds;
    }

    public function addPlayerExtId(PlayerExtId $playerExtId): self
    {
        if (!$this->playerExtIds->contains($playerExtId)) {
            $this->playerExtIds[] = $playerExtId;
            $playerExtId->setPlayer($this);
        }

        return $this;
    }

    public function removePlayerExtId(PlayerExtId $playerExtId): self
    {
        if ($this->playerExtIds->removeElement($playerExtId)) {
            // set the owning side to null (unless already changed)
            if ($playerExtId->getPlayer() === $this) {
                $playerExtId->setPlayer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PlayerStats[]
     */
    public function getPlayerStats(): Collection
    {
        return $this->playerStats;
    }

    public function addPlayerStat(PlayerStats $playerStat): self
    {
        if (!$this->playerStats->contains($playerStat)) {
            $this->playerStats[] = $playerStat;
            $playerStat->setPlayer($this);
        }

        return $this;
    }

    public function removePlayerStat(PlayerStats $playerStat): self
    {
        if ($this->playerStats->removeElement($playerStat)) {
            // set the owning side to null (unless already changed)
            if ($playerStat->getPlayer() === $this) {
                $playerStat->setPlayer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PlayerScore[]
     */
    public function getPlayerScores(): Collection
    {
        return $this->playerScores;
    }

    public function addPlayerScore(PlayerScore $playerScore): self
    {
        if (!$this->playerScores->contains($playerScore)) {
            $this->playerScores[] = $playerScore;
            $playerScore->setPlayer($this);
        }

        return $this;
    }

    public function removePlayerScore(PlayerScore $playerScore): self
    {
        if ($this->playerScores->removeElement($playerScore)) {
            // set the owning side to null (unless already changed)
            if ($playerScore->getPlayer() === $this) {
                $playerScore->setPlayer(null);
            }
        }

        return $this;
    }
}

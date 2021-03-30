<?php

namespace App\Entity;

use App\Repository\PlayerStatsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlayerStatsRepository::class)
 */
class PlayerStats
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Week::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $week;

    /**
     * @ORM\ManyToOne(targetEntity=Player::class, inversedBy="playerStats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $player;

    /**
     * @ORM\Column(type="boolean")
     */
    private $complete;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yards;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $intThrow;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rec;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fumble;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tackles;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sacks;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $halfSack;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $intCatch;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $passDefend;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $returnYard;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fumRec;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fumForce;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $td;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $twoPoint;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $specTd;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $safety;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $xp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $missXp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fg30;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fg40;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fg50;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fg60;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $missFg30;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ptDiff;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $blockPunt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $blockFg;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $blockXp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $penalty;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWeek(): ?Week
    {
        return $this->week;
    }

    public function setWeek(?Week $week): self
    {
        $this->week = $week;

        return $this;
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

    public function getComplete(): ?bool
    {
        return $this->complete;
    }

    public function setComplete(bool $complete): self
    {
        $this->complete = $complete;

        return $this;
    }

    public function getYards(): ?int
    {
        return $this->yards;
    }

    public function setYards(?int $yards): self
    {
        $this->yards = $yards;

        return $this;
    }

    public function getIntThrow(): ?int
    {
        return $this->intThrow;
    }

    public function setIntThrow(?int $intThrow): self
    {
        $this->intThrow = $intThrow;

        return $this;
    }

    public function getRec(): ?int
    {
        return $this->rec;
    }

    public function setRec(?int $rec): self
    {
        $this->rec = $rec;

        return $this;
    }

    public function getFumble(): ?int
    {
        return $this->fumble;
    }

    public function setFumble(?int $fumble): self
    {
        $this->fumble = $fumble;

        return $this;
    }

    public function getTackles(): ?int
    {
        return $this->tackles;
    }

    public function setTackles(?int $tackles): self
    {
        $this->tackles = $tackles;

        return $this;
    }

    public function getSacks(): ?int
    {
        return $this->sacks;
    }

    public function setSacks(?int $sacks): self
    {
        $this->sacks = $sacks;

        return $this;
    }

    public function getHalfSack(): ?int
    {
        return $this->halfSack;
    }

    public function setHalfSack(?int $halfSack): self
    {
        $this->halfSack = $halfSack;

        return $this;
    }

    public function getIntCatch(): ?int
    {
        return $this->intCatch;
    }

    public function setIntCatch(?int $intCatch): self
    {
        $this->intCatch = $intCatch;

        return $this;
    }

    public function getPassDefend(): ?int
    {
        return $this->passDefend;
    }

    public function setPassDefend(?int $passDefend): self
    {
        $this->passDefend = $passDefend;

        return $this;
    }

    public function getReturnYard(): ?int
    {
        return $this->returnYard;
    }

    public function setReturnYard(?int $returnYard): self
    {
        $this->returnYard = $returnYard;

        return $this;
    }

    public function getFumRec(): ?int
    {
        return $this->fumRec;
    }

    public function setFumRec(?int $fumRec): self
    {
        $this->fumRec = $fumRec;

        return $this;
    }

    public function getFumForce(): ?int
    {
        return $this->fumForce;
    }

    public function setFumForce(?int $fumForce): self
    {
        $this->fumForce = $fumForce;

        return $this;
    }

    public function getTd(): ?int
    {
        return $this->td;
    }

    public function setTd(?int $td): self
    {
        $this->td = $td;

        return $this;
    }

    public function getTwoPoint(): ?int
    {
        return $this->twoPoint;
    }

    public function setTwoPoint(?int $twoPoint): self
    {
        $this->twoPoint = $twoPoint;

        return $this;
    }

    public function getSpecTd(): ?int
    {
        return $this->specTd;
    }

    public function setSpecTd(?int $specTd): self
    {
        $this->specTd = $specTd;

        return $this;
    }

    public function getSafety(): ?int
    {
        return $this->safety;
    }

    public function setSafety(?int $safety): self
    {
        $this->safety = $safety;

        return $this;
    }

    public function getXp(): ?int
    {
        return $this->xp;
    }

    public function setXp(?int $xp): self
    {
        $this->xp = $xp;

        return $this;
    }

    public function getMissXp(): ?int
    {
        return $this->missXp;
    }

    public function setMissXp(?int $missXp): self
    {
        $this->missXp = $missXp;

        return $this;
    }

    public function getFg30(): ?int
    {
        return $this->fg30;
    }

    public function setFg30(?int $fg30): self
    {
        $this->fg30 = $fg30;

        return $this;
    }

    public function getFg40(): ?int
    {
        return $this->fg40;
    }

    public function setFg40(?int $fg40): self
    {
        $this->fg40 = $fg40;

        return $this;
    }

    public function getFg50(): ?int
    {
        return $this->fg50;
    }

    public function setFg50(?int $fg50): self
    {
        $this->fg50 = $fg50;

        return $this;
    }

    public function getFg60(): ?int
    {
        return $this->fg60;
    }

    public function setFg60(?int $fg60): self
    {
        $this->fg60 = $fg60;

        return $this;
    }

    public function getMissFg30(): ?int
    {
        return $this->missFg30;
    }

    public function setMissFg30(?int $missFg30): self
    {
        $this->missFg30 = $missFg30;

        return $this;
    }

    public function getPtDiff(): ?int
    {
        return $this->ptDiff;
    }

    public function setPtDiff(?int $ptDiff): self
    {
        $this->ptDiff = $ptDiff;

        return $this;
    }

    public function getBlockPunt(): ?int
    {
        return $this->blockPunt;
    }

    public function setBlockPunt(?int $blockPunt): self
    {
        $this->blockPunt = $blockPunt;

        return $this;
    }

    public function getBlockFg(): ?int
    {
        return $this->blockFg;
    }

    public function setBlockFg(?int $blockFg): self
    {
        $this->blockFg = $blockFg;

        return $this;
    }

    public function getBlockXp(): ?int
    {
        return $this->blockXp;
    }

    public function setBlockXp(?int $blockXp): self
    {
        $this->blockXp = $blockXp;

        return $this;
    }

    public function getPenalty(): ?int
    {
        return $this->penalty;
    }

    public function setPenalty(?int $penalty): self
    {
        $this->penalty = $penalty;

        return $this;
    }
}

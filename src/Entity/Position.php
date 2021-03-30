<?php

namespace App\Entity;

use App\Repository\PositionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PositionRepository::class)
 */
class Position
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=2)
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $usePos;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $fullName;

    /**
     * @ORM\Column(type="boolean")
     */
    private $offense;

    /**
     * @ORM\Column(type="boolean")
     */
    private $defense;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUsePos(): ?bool
    {
        return $this->usePos;
    }

    public function setUsePos(bool $usePos): self
    {
        $this->usePos = $usePos;

        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getOffense(): ?bool
    {
        return $this->offense;
    }

    public function setOffense(bool $offense): self
    {
        $this->offense = $offense;

        return $this;
    }

    public function getDefense(): ?bool
    {
        return $this->defense;
    }

    public function setDefense(bool $defense): self
    {
        $this->defense = $defense;

        return $this;
    }
}

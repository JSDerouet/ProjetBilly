<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
class Item
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'boolean')]
    private $is_start;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $habilete;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $adresse;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $endurance;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $chance;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $damage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $armor;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $crit;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $typage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsStart(): ?bool
    {
        return $this->is_start;
    }

    public function setIsStart(bool $is_start): self
    {
        $this->is_start = $is_start;

        return $this;
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

    public function getHabilete(): ?int
    {
        return $this->habilete;
    }

    public function setHabilete(?int $habilete): self
    {
        $this->habilete = $habilete;

        return $this;
    }

    public function getAdresse(): ?int
    {
        return $this->adresse;
    }

    public function setAdresse(?int $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEndurance(): ?int
    {
        return $this->endurance;
    }

    public function setEndurance(?int $endurance): self
    {
        $this->endurance = $endurance;

        return $this;
    }

    public function getChance(): ?int
    {
        return $this->chance;
    }

    public function setChance(?int $chance): self
    {
        $this->chance = $chance;

        return $this;
    }

    public function getDamage(): ?int
    {
        return $this->damage;
    }

    public function setDamage(?int $damage): self
    {
        $this->damage = $damage;

        return $this;
    }

    public function getArmor(): ?int
    {
        return $this->armor;
    }

    public function setArmor(?int $armor): self
    {
        $this->armor = $armor;

        return $this;
    }

    public function getCrit(): ?int
    {
        return $this->crit;
    }

    public function setCrit(?int $crit): self
    {
        $this->crit = $crit;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTypage(): ?string
    {
        return $this->typage;
    }

    public function setTypage(?string $typage): self
    {
        $this->typage = $typage;

        return $this;
    }
}

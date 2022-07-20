<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name='Billy';

    #[ORM\Column(type: 'string', length: 255)]
    private $caractere;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $pv;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $chance;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $gloire;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $richesse;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $damage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $armor;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $critique;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $pvmax;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $habileteBase = 2;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $habileteCarac;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $habileteItem;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $habileteGain;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $habileteTotal;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $adresseBase;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $adresseCarac;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $adresseItem;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $adresseGain;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $adresseTotal;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $enduranceBase;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $enduranceCarac;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $enduranceItem;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $enduranceGain;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $enduranceTotal;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $chanceBase;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $chanceCarac;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $chanceItem;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $chanceGain;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $chanceTotal;

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

    public function getCaractere(): ?string
    {
        return $this->caractere;
    }

    public function setCaractere(string $caractere): self
    {
        $this->caractere = $caractere;

        return $this;
    }

    public function getPv(): ?int
    {
        return $this->pv;
    }

    public function setPv(?int $pv): self
    {
        $this->pv = $pv;

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

    public function getGloire(): ?int
    {
        return $this->gloire;
    }

    public function setGloire(?int $gloire): self
    {
        $this->gloire = $gloire;

        return $this;
    }

    public function getRichesse(): ?int
    {
        return $this->richesse;
    }

    public function setRichesse(?int $richesse): self
    {
        $this->richesse = $richesse;

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

    public function getCritique(): ?int
    {
        return $this->critique;
    }

    public function setCritique(?int $critique): self
    {
        $this->critique = $critique;

        return $this;
    }

    public function getPvmax(): ?int
    {
        return $this->pvmax;
    }

    public function setPvmax(?int $pvmax): self
    {
        $this->pvmax = $pvmax;

        return $this;
    }

    public function getHabileteBase(): ?int
    {
        return $this->habileteBase;
    }

    public function setHabileteBase(?int $habileteBase): self
    {
        $this->habileteBase = $habileteBase;

        return $this;
    }

    public function getHabileteCarac(): ?int
    {
        return $this->habileteCarac;
    }

    public function setHabileteCarac(?int $habileteCarac): self
    {
        $this->habileteCarac = $habileteCarac;

        return $this;
    }

    public function getHabileteItem(): ?int
    {
        return $this->habileteItem;
    }

    public function setHabileteItem(?int $habileteItem): self
    {
        $this->habileteItem = $habileteItem;

        return $this;
    }

    public function getHabileteGain(): ?int
    {
        return $this->habileteGain;
    }

    public function setHabileteGain(?int $habileteGain): self
    {
        $this->habileteGain = $habileteGain;

        return $this;
    }

    public function getHabileteTotal(): ?int
    {
        return $this->habileteTotal;
    }

    public function setHabileteTotal(?int $habileteTotal): self
    {
        $this->habileteTotal = $habileteTotal;

        return $this;
    }

    public function getAdresseBase(): ?int
    {
        return $this->adresseBase;
    }

    public function setAdresseBase(?int $adresseBase): self
    {
        $this->adresseBase = $adresseBase;

        return $this;
    }

    public function getAdresseCarac(): ?int
    {
        return $this->adresseCarac;
    }

    public function setAdresseCarac(?int $adresseCarac): self
    {
        $this->adresseCarac = $adresseCarac;

        return $this;
    }

    public function getAdresseItem(): ?int
    {
        return $this->adresseItem;
    }

    public function setAdresseItem(?int $adresseItem): self
    {
        $this->adresseItem = $adresseItem;

        return $this;
    }

    public function getAdresseGain(): ?int
    {
        return $this->adresseGain;
    }

    public function setAdresseGain(?int $adresseGain): self
    {
        $this->adresseGain = $adresseGain;

        return $this;
    }

    public function getAdresseTotal(): ?int
    {
        return $this->adresseTotal;
    }

    public function setAdresseTotal(?int $adresseTotal): self
    {
        $this->adresseTotal = $adresseTotal;

        return $this;
    }

    public function getEnduranceBase(): ?int
    {
        return $this->enduranceBase;
    }

    public function setEnduranceBase(?int $enduranceBase): self
    {
        $this->enduranceBase = $enduranceBase;

        return $this;
    }

    public function getEnduranceCarac(): ?int
    {
        return $this->enduranceCarac;
    }

    public function setEnduranceCarac(?int $enduranceCarac): self
    {
        $this->enduranceCarac = $enduranceCarac;

        return $this;
    }

    public function getEnduranceItem(): ?int
    {
        return $this->enduranceItem;
    }

    public function setEnduranceItem(?int $enduranceItem): self
    {
        $this->enduranceItem = $enduranceItem;

        return $this;
    }

    public function getEnduranceGain(): ?int
    {
        return $this->enduranceGain;
    }

    public function setEnduranceGain(?int $enduranceGain): self
    {
        $this->enduranceGain = $enduranceGain;

        return $this;
    }

    public function getEnduranceTotal(): ?int
    {
        return $this->enduranceTotal;
    }

    public function setEnduranceTotal(?int $enduranceTotal): self
    {
        $this->enduranceTotal = $enduranceTotal;

        return $this;
    }

    public function getChanceBase(): ?int
    {
        return $this->chanceBase;
    }

    public function setChanceBase(?int $chanceBase): self
    {
        $this->chanceBase = $chanceBase;

        return $this;
    }

    public function getChanceCarac(): ?int
    {
        return $this->chanceCarac;
    }

    public function setChanceCarac(?int $chanceCarac): self
    {
        $this->chanceCarac = $chanceCarac;

        return $this;
    }

    public function getChanceItem(): ?int
    {
        return $this->chanceItem;
    }

    public function setChanceItem(?int $chanceItem): self
    {
        $this->chanceItem = $chanceItem;

        return $this;
    }

    public function getChanceGain(): ?int
    {
        return $this->chanceGain;
    }

    public function setChanceGain(?int $chanceGain): self
    {
        $this->chanceGain = $chanceGain;

        return $this;
    }

    public function getChanceTotal(): ?int
    {
        return $this->chanceTotal;
    }

    public function setChanceTotal(?int $chanceTotal): self
    {
        $this->chanceTotal = $chanceTotal;

        return $this;
    }
}

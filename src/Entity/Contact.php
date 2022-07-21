<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

class Contact
{
    #[Assert\NotBlank]
    #[Assert\Length(
        max: 100,
    )]
    private string $name;

    #[Assert\NotBlank]
    #[Assert\Length(
        max: 255,
    )]
    #[Assert\Email()]
    private string $email;

    #[Assert\NotBlank]
    private string $message;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}

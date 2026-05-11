<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\NotBlank(message="Le contenu est obligatoire")
     * @Assert\Length(min=2, max=200)
     */
    private $contenu;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $date_envoir;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateEnvoir(): ?string
    {
        return $this->date_envoir;
    }

    public function setDateEnvoir(string $date_envoir): self
    {
        $this->date_envoir = $date_envoir;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\NotationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=NotationRepository::class)
 */
class Notation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="La note est obligatoire")
     * @Assert\Range(min=0, max=20, notInRangeMessage="La note doit être entre 0 et 20")
     */
    private $note;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\Length(max=200, maxMessage="Le commentaire ne peut pas dépasser 200 caractères")
     */
    private $commentaire;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="La date est obligatoire")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}

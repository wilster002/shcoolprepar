<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuizRepository::class)
 */
class Quiz
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $titre;

    /**
     * @ORM\Column(type="date")
     */
    private $date_passage;

    /**
     * @ORM\Column(type="integer")
     */
    private $resultst;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDatePassage(): ?\DateTimeInterface
    {
        return $this->date_passage;
    }

    public function setDatePassage(\DateTimeInterface $date_passage): self
    {
        $this->date_passage = $date_passage;

        return $this;
    }

    public function getResultst(): ?int
    {
        return $this->resultst;
    }

    public function setResultst(int $resultst): self
    {
        $this->resultst = $resultst;

        return $this;
    }
}

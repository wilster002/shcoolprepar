<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank(message="Le titre est obligatoire")
     * @Assert\Length(min=3, max=20, minMessage="Le titre doit contenir au moins 3 caractères")
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\NotBlank(message="Le contenu est obligatoire")
     * @Assert\Length(min=10, minMessage="Le contenu doit contenir au moins 10 caractères")
     */
    private $contenu;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="La date de publication est obligatoire")
     */
    private $date_publication;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank(message="La catégorie est obligatoire")
     */
    private $categorie;

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

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->date_publication;
    }

    public function setDatePublication(\DateTimeInterface $date_publication): self
    {
        $this->date_publication = $date_publication;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}

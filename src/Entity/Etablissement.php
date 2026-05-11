<?php

namespace App\Entity;

use App\Repository\EtablissementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EtablissementRepository::class)
 */
class Etablissement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\NotBlank(message="Le nom de l'établissement est obligatoire")
     * @Assert\Length(min=2, max=200)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="La localisation est obligatoire")
     */
    private $localisation;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Le contact est obligatoire")
     * @Assert\Range(min=1000000, message="Le numéro de contact doit être valide")
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Le type d'établissement est obligatoire")
     */
    private $type;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getContact(): ?int
    {
        return $this->contact;
    }

    public function setContact(int $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

  
}

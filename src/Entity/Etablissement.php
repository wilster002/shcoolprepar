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

    /**
     * @ORM\Column(type="float")
     * @Assert\Range(min=-90, max=90, message="La latitude doit être entre -90 et 90")
     */
    private $latitude;

    /**
     * @ORM\Column(type="float")
     * @Assert\Range(min=-180, max=180, message="La longitude doit être entre -180 et 180")
     */
    private $longitude;

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

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}

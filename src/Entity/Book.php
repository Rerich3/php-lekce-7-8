<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $pocetstran;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $autor;

    /**
     * @ORM\Column(type="integer")
     */
    private $rokvydani;

    /**
     * @ORM\Column(type="integer")
     */
    private $cena;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPocetstran(): ?int
    {
        return $this->pocetstran;
    }

    public function setPocetstran(int $pocetstran): self
    {
        $this->pocetstran = $pocetstran;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getRokvydani(): ?int
    {
        return $this->rokvydani;
    }

    public function setRokvydani(int $rokvydani): self
    {
        $this->rokvydani = $rokvydani;

        return $this;
    }

    public function getCena(): ?int
    {
        return $this->cena;
    }

    public function setCena(int $cena): self
    {
        $this->cena = $cena;

        return $this;
    }
}

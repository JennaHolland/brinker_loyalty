<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Loyalty>
     */
    #[ORM\ManyToOne(targetEntity: Loyalty::class, mappedBy: 'users')]
    private Collection $no;

    public function __construct()
    {
        $this->no = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Loyalty>
     */
    public function getNo(): Collection
    {
        return $this->no;
    }

    public function addNo(Loyalty $no): static
    {
        if (!$this->no->contains($no)) {
            $this->no->add($no);
            $no->addUser($this);
        }

        return $this;
    }

    public function removeNo(Loyalty $no): static
    {
        if ($this->no->removeElement($no)) {
            $no->removeUser($this);
        }

        return $this;
    }
}

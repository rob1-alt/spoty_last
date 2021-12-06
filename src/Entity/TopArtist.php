<?php

namespace App\Entity;

use App\Repository\TopArtistRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TopArtistRepository::class)
 */
class TopArtist
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $spotifyId;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="topArtists")
     */
    private $users;


    /**
     * @ORM\Column(type="integer")
     */
    private $popularity;

    /**
     * @ORM\Column(type="object")
     */
    private $followers;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genres;

//    /**
//     * @ORM\Column(type="integer")
//     */
//    private $popularity;



//    /**
//     * @ORM\Column(type="array")
//     */
//    private $genres = [];

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

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



    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->users->removeElement($user);

        return $this;
    }
    public function getSpotifyId(): ?string
    {
        return $this->spotifyId;
    }

    public function setSpotifyId(string $spotifyId): self
    {
        $this->spotifyId = $spotifyId;

        return $this;
    }

    public function getPopularity(): ?int
    {
        return $this->popularity;
    }

    public function setPopularity(int $popularity): self
    {
        $this->popularity = $popularity;

        return $this;
    }

    public function getFollowers()
    {
        return $this->followers;
    }

    public function setFollowers($followers): self
    {
        $this->followers = $followers;

        return $this;
    }

    public function getGenres(): ?string
    {
        return $this->genres;
    }

    public function setGenres(string $genres): self
    {
        $this->genres = $genres;

        return $this;
    }


}

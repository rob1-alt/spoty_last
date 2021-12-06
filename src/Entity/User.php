<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $spotifyId;

    /**
     * @ORM\Column(type="text")
     */
    private $spotifyToken;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $frontToken;

    /**
     * @ORM\ManyToMany(targetEntity=TopTrack::class, mappedBy="users")
     */
    private $topTracks;

    /**
     * @ORM\ManyToMany(targetEntity=TopArtist::class, mappedBy="users")
     */
    private $topArtists;

    public function __construct()
    {
        $this->topTracks = new ArrayCollection();
        $this->topArtists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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

    public function getSpotifyToken(): ?string
    {
        return $this->spotifyToken;
    }

    public function setSpotifyToken(string $spotifyToken): self
    {
        $this->spotifyToken = $spotifyToken;

        return $this;
    }

    public function getFrontToken(): ?string
    {
        return $this->frontToken;
    }

    public function setFrontToken(string $frontToken): self
    {
        $this->frontToken = $frontToken;

        return $this;
    }

    /**
     * @return Collection|TopTrack[]
     */
    public function getTopTracks(): Collection
    {
        return $this->topTracks;
    }

    public function addTopTrack(TopTrack $topTrack): self
    {
        if (!$this->topTracks->contains($topTrack)) {
            $this->topTracks[] = $topTrack;
            $topTrack->addUser($this);
        }

        return $this;
    }

    public function removeTopTrack(TopTrack $topTrack): self
    {
        if ($this->topTracks->removeElement($topTrack)) {
            $topTrack->removeUser($this);
        }

        return $this;
    }

    /**
     * @return Collection|TopArtist[]
     */
    public function getTopArtists(): Collection
    {
        return $this->topArtists;
    }

    public function addTopArtist(TopArtist $topArtist): self
    {
        if (!$this->topArtists->contains($topArtist)) {
            $this->topArtists[] = $topArtist;
            $topArtist->addUser($this);
        }

        return $this;
    }

    public function removeTopArtist(TopArtist $topArtist): self
    {
        if ($this->topArtists->removeElement($topArtist)) {
            $topArtist->removeUser($this);
        }

        return $this;
    }
}

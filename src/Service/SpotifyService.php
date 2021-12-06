<?php


namespace App\Service;


use App\Entity\TopTrack;
use App\Entity\TopArtist;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SpotifyService
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var HttpClientInterface
     */
    private $httpClient;

    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    public function __construct(
        EntityManagerInterface $entityManager,
        HttpClientInterface $httpClient,
        ParameterBagInterface  $parameterBag
    ){
        $this->entityManager = $entityManager;
        $this->httpClient = $httpClient;
        $this->parameterBag = $parameterBag;
    }

    public function spotifyMe(string $token): array {
        $requestProfile = $this->httpClient->request('GET', 'https://api.spotify.com/v1/me',[
            'headers' => [
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => sprintf('Bearer %s', $token)
            ]
        ]);
        return json_decode($requestProfile->getContent(), true);
    }

    public function spotifyTopItems(string $token): array {
        $requestTopItems = $this->httpClient->request('GET', 'https://api.spotify.com/v1/me/top/tracks?time_range=long_term&limit=10&offset=5',[
            'headers' => [
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => sprintf('Bearer %s', $token)
            ]
        ]);
        return json_decode($requestTopItems->getContent(), true);
    }

    public function spotifyTopItemsTracks(User $user): array {
        $requestTopItems = $this->httpClient->request('GET', 'https://api.spotify.com/v1/me/top/tracks?time_range=long_term&limit=10&offset=5',[
            'headers' => [
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => sprintf('Bearer %s', $user->getSpotifyToken())
            ]
        ]);
        $jsonTopTracks = json_decode($requestTopItems->getContent(), true);

        $topTracks = [];

        foreach ($jsonTopTracks['items'] as $jsonTopTrack) {

            $topTrack = $this->entityManager->getRepository(TopTrack::class)->findOneBySpotifyId($jsonTopTrack['id']);
            if ($topTrack === null) {
                $topTrack = new TopTrack();
            }

            $topTrack->setDuration($jsonTopTrack['duration_ms']);
            $topTrack->setName($jsonTopTrack['name']);
//            $topTrack->setImageUrl($jsonTopTrack['album']['images'][0]['url']);
            $release_date = new \DateTime($jsonTopTrack['album']['release_date']);
            $topTrack->setReleaseDate($release_date);
//            $topTrack->setAlbum($jsonTopTrack['album']);
            $topTrack->setSpotifyId($jsonTopTrack['id']);

            $user->addTopTrack($topTrack);
            $topTrack->addUser($user);

            $this->entityManager->persist($topTrack);
            $this->entityManager->flush();
            $this->entityManager->persist($user);
            $this->entityManager->flush();


            $topTracks[] = $topTrack;
        }


        return $topTracks;
    }
    public function spotifyTopItemsArtists(User $user): array {
        $requestTopItems = $this->httpClient->request('GET', 'https://api.spotify.com/v1/me/top/artists?time_range=long_term&limit=10&offset=5',[
            'headers' => [
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => sprintf('Bearer %s', $user->getSpotifyToken())
            ]
        ]);
        $jsonTopArtists = json_decode($requestTopItems->getContent(), true);

        $topArtists= [];

        foreach ($jsonTopArtists['items'] as $jsonTopArtist) {

            $topArtist = $this->entityManager->getRepository(TopArtist::class)->findOneBySpotifyId($jsonTopArtist['id']);
            if ($topArtist === null) {
                $topArtist = new TopArtist();
            }
            $topArtist->setName($jsonTopArtist['name']);
//          $topArtist->setImageUrl($jsonTopArtist['album']['images'][0]['url']);
            $topArtist->setSpotifyId($jsonTopArtist['id']);
            $topArtist->setFollowers($jsonTopArtist['followers']['total']);
            $topArtist->setPopularity($jsonTopArtist['popularity']);
            $topArtist->setGenres($jsonTopArtist['genres'][0]);




            $user->addTopArtist($topArtist);
            $topArtist->addUser($user);

            $this->entityManager->persist($topArtist);
            $this->entityManager->persist($user);
            $topArtists[] = $topArtist;
        }
        $this->entityManager->flush();

        return $topArtists;
    }



}
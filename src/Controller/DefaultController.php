<?php

namespace App\Controller;
use App\Repository\TopTrackRepository;
use App\Service\SpotifyService;
use App\Service\UserService;
use MongoDB\Driver\ReadConcern;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Entity\TopItems;

class DefaultController extends AbstractController
{
    /**
     * @var HttpClientInterface
     */
    private $httpClient;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var SpotifyService
     */
    private $spotifyService;

    /**
     * @var UserService
     */
    private $userService;

    public function __construct(HttpClientInterface $httpClientInterface, EntityManagerInterface $entityManager, SpotifyService $spotifyService, UserService $userService) {
        $this->httpClient = $httpClientInterface;
        $this->entityManager = $entityManager;
        $this->spotifyService = $spotifyService;
        $this->userService = $userService;
    }

    /**
     * @Route("/oauth", name="oauth")
     */
    public function oauth(): Response
    {
        $client_id = '8a8cfbfdc1ab48f0bc2782bcbdfe9f84';
        $redirect_uri = 'http://127.0.0.1:8080/exchange_token';
        $scope = 'user-read-private user-read-email user-top-read';

        $oauth_string = sprintf(
            'https://accounts.spotify.com/authorize?client_id=%s&response_type=code&scope=%s&redirect_uri=%s',
            $client_id,
            $scope,
            $redirect_uri
        );

        return $this->redirect($oauth_string);
    }

    /**
     * @Route("/exchange_token", name="exchange_token")
     */
    public function token(Request $request): Response
    {
        $authorization_code = $request->get('code');

        $clientSecret = 'c132478e62f14c8894408f775eeaf138';
        $clientId = '8a8cfbfdc1ab48f0bc2782bcbdfe9f84';
        $redirect_uri = 'http://127.0.0.1:8080/exchange_token';

        $authorizationHeader = base64_encode(sprintf('%s:%s', $clientId, $clientSecret));

        try {

            $body = [
                'code' => $authorization_code,
                'grant_type' => 'authorization_code',
                'redirect_uri' => $redirect_uri
            ];

            $headers = [
                'Authorization' => sprintf('Basic %s', $authorizationHeader),
                'Content-Type' => 'application/x-www-form-urlencoded'
            ];

            $response = $this->httpClient->request(
                'POST',
                'https://accounts.spotify.com/api/token',
                ['body' => $body, 'headers' => $headers]

            );
            $json_response = json_decode($response->getContent(), true);
        } catch (\Exception $e) {
            return $this->json($e->getMessage());
        }


        $token = $json_response['access_token'];

        $jsonUser = $this->spotifyService->spotifyMe($token);

        // If spotify id is already in db, just update the token.
        $user = new User();
        $user->setSpotifyToken($token);
        $user->setSpotifyID($jsonUser['id']);
        $user->setUsername($jsonUser['display_name']);
        $user->setFrontToken(substr(sha1(rand()), 0, 64));

        $this->entityManager->persist($user);
        $this->entityManager->flush();



        //        spotify User top tracks
        $jsonTopItemsTracks = $this->spotifyService->spotifyTopItemsTracks($user);
        $jsonTopItemsTracks = $this->json($jsonTopItemsTracks);

        //spotify User top artists
        $jsonTopItemsArtists = $this->spotifyService->spotifyTopItemsArtists($user);
        $jsonTopItemsArtists = $this->json($jsonTopItemsArtists);












        // redirect to front end
        //return $this->redirect('front_end');
        return $this->redirect(sprintf('http://127.0.0.1:3000/?frontToken=%s', $user->getFrontToken()));
    }

    /**
     * @Route("/error", name="error")
     */
    public function error(): Response
    {
        return $this->json('nope.');
    }

    /**
     * @Route("/toptracks/{id}", name="toptracks")
     */
    public function toptracks(UserRepository $userRepository, string $id): JsonResponse
    {
        $returnIdUser = $userRepository->findByFrontToken($id)[0]["id"];

        $user = $userRepository->find($returnIdUser);


        $topTracks = $user->getTopTracks()->getValues();

        $json_tracks = [];

        for($i = 0; $i < sizeof($topTracks); $i++) {
            $json_tracks[$i] = array(
                "name" => $topTracks[$i]->getName(),
                "urlImage" => $topTracks[$i]->getImageUrl(),
                "releaseDate" => $topTracks[$i]->getReleaseDate(),
                "duree" => $topTracks[$i]->getDuration(),
            );
        }

        return $this->json($json_tracks);
    }

    /**
     * @Route("/topartist/{id}", name="topartist")
     */
    public function topartist(UserRepository $userRepository, string $id): JsonResponse
    {
        $returnIdUser = $userRepository->findByFrontToken($id)[0]["id"];

        $user = $userRepository->find($returnIdUser);


        $topArtist = $user->getTopArtists()->getValues();

        $json_artists = [];

        for($i = 0; $i < sizeof($topArtist); $i++) {
            $json_artists[$i] = array(
                "name" => $topArtist[$i]->getName(),
                "popularity" => $topArtist[$i]->getPopularity(),
                "" => $topArtist[$i]->getPopularity(),
            );
        }

        return $this->json($json_artists);
    }

}

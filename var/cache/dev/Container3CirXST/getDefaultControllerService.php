<?php

namespace Container3CirXST;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DefaultController' shared autowired service.
     *
     * @return \App\Controller\DefaultController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DefaultController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client-contracts/HttpClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client/HttpClient.php';
        include_once \dirname(__DIR__, 4).'/src/Service/SpotifyService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/UserService.php';

        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);
        $a->setLogger(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        $container->services['App\\Controller\\DefaultController'] = $instance = new \App\Controller\DefaultController($a, $b, new \App\Service\SpotifyService($b, $a, ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)))), new \App\Service\UserService($b));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'session' => ['privates', '.session.deprecated', 'get_Session_DeprecatedService', true],
        ], [
            'doctrine' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'session' => '.session.deprecated',
        ]))->withContext('App\\Controller\\DefaultController', $container));

        return $instance;
    }
}

<?php


namespace Proyecto\ProyectoBundle\Listener;

use Monolog\Logger;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Access extends Controller
{
    /** @var Router */
    protected $router;

    /** @var TokenStorage */
    protected $token;

    /** @var EventDispatcherInterface */
    protected $dispatcher;

    /** @var Logger */
    protected $logger;

    /**
     * @param Router $router
     * @param TokenStorage $token
     * @param EventDispatcherInterface $dispatcher
     * @param Logger $logger
     */
    public function __construct(Router $router, TokenStorage $token, EventDispatcherInterface $dispatcher, Logger $logger)
    {
        $this->router       = $router;
        $this->token        = $token;
        $this->dispatcher   = $dispatcher;
        $this->logger       = $logger;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $this->dispatcher->addListener(KernelEvents::RESPONSE, [$this, 'onKernelResponse']);
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        $roles = $this->token->getToken()->getRoles();

        $rolesTab = array_map(function($role){
            return $role->getRole();
        }, $roles);

        $this->logger->info(var_export($rolesTab, true));

        if (in_array('ROLE_ADMIN', $rolesTab) || in_array('ROLE_SUPER_ADMIN', $rolesTab)) {
            $route = ('http://localhost/ProyectoW_S/web/app_dev.php/admin/dashboard');
        } elseif (in_array('ROLE_CLIENT', $rolesTab)) {
            $route = $this->router->generate('frontend_homepage');
        } else {
            $route = $this->router->generate('portal_homepage');
        }

         return $this->redirect($route);
    }
}

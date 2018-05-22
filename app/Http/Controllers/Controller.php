<?php
/**
 * Created by PhpStorm.
 * User: lester
 * Date: 2018/4/28 10:57
 * Desc:
 */

namespace App\Http\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Interop\Container\ContainerInterface;

class Controller
{
    /**
     * Container instance
     * @var mixed $container
     */
    protected $container;

    /**
     * View instance
     * @var mixed $view
     */
    protected $view;

    /**
     * Log instance
     * @var mixed logger
     */
    protected $logger;

    /**
     * Controller constructor.
     * @param ContainerInterface $container
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->view = $this->container->get('view');
        $this->logger = $this->container->get('logger');
    }

}
<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
/**
 * ProjectServiceContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class ProjectServiceContainer extends Container
{
    private $parameters;
    private $targetDirs = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->methodMap = array('foo' => 'getFooService');
    }
    /**
     * Gets the 'foo' service.
     *
     * This service is autowired.
     *
     * @return \Foo A Foo instance
     */
    protected function getFooService()
    {
        return $this->services['foo'] = new \Foo();
    }
}

?>
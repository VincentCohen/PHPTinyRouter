<?php

/**
 * Class PHPTinyRouter
 */
Class PHPTinyRouter {

    /**
     * @var array
     */
    protected $_routes = array();


    /**
     *
     */
    public function __construct()
    {

    }

    /**
     * @param array $routes
     */
    public function addRoutes($routes = array())
    {

    }


    /**
     * @param array $route
     */
    public function addRoute($route = array())
    {
        $this->_routes[] = $route;
    }


    /**
     * @return array
     */
    public function match()
    {
        $match = array();

        return $match;
    }

}
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.RSu4141' shared service.

return $this->privates['.service_locator.RSu4141'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'employee' => ['privates', '.errored..service_locator.RSu4141.App\\Entity\\Employee', NULL, 'Cannot autowire service ".service_locator.RSu4141": it references class "App\\Entity\\Employee" but no such service exists.'],
], [
    'employee' => 'App\\Entity\\Employee',
]);

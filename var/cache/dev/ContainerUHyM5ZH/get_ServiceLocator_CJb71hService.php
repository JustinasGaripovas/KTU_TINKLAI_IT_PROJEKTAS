<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.c_jb71h' shared service.

return $this->privates['.service_locator.c_jb71h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'employee' => ['privates', '.errored..service_locator.c_jb71h.App\\Entity\\Employee', NULL, 'Cannot autowire service ".service_locator.c_jb71h": it references class "App\\Entity\\Employee" but no such service exists.'],
    'examinationRepository' => ['privates', 'App\\Repository\\ExaminationRepository', 'getExaminationRepositoryService.php', true],
], [
    'employee' => 'App\\Entity\\Employee',
    'examinationRepository' => 'App\\Repository\\ExaminationRepository',
]);

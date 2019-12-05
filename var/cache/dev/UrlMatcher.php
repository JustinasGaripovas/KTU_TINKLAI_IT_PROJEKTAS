<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/employee/admin/main' => [[['_route' => 'admin_main', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/employee/doctor/main' => [[['_route' => 'doctor_main', '_controller' => 'App\\Controller\\Doctor\\DoctorController::index'], null, null, null, false, false, null]],
        '/user/doctor/main' => [[['_route' => 'doctor_visitation_main', '_controller' => 'App\\Controller\\Doctor\\DoctorController::visitationIndex'], null, null, null, false, false, null]],
        '/employee/doctor/pacient/main' => [[['_route' => 'doctor_pacient_main', '_controller' => 'App\\Controller\\Doctor\\DoctorController::pacientIndex'], null, null, null, false, false, null]],
        '/employee/main' => [[['_route' => 'employee_main', '_controller' => 'App\\Controller\\Employee\\EmployeeController::main'], null, null, null, false, false, null]],
        '/employee/login' => [[['_route' => 'employee_login', '_controller' => 'App\\Controller\\Employee\\EmployeeLoginController::login'], null, null, null, false, false, null]],
        '/employee/logout' => [[['_route' => 'employee_logout', '_controller' => 'App\\Controller\\Employee\\EmployeeLoginController::logout'], null, null, null, false, false, null]],
        '/employee/register' => [[['_route' => 'employee_registration', '_controller' => 'App\\Controller\\Employee\\EmployeeRegistrationController::register'], null, null, null, false, false, null]],
        '/employee/laborant/main' => [[['_route' => 'laborant_main', '_controller' => 'App\\Controller\\Laborant\\LaborantController::main'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/user/main' => [[['_route' => 'user_main', '_controller' => 'App\\Controller\\User\\UserController::register'], null, null, null, false, false, null]],
        '/user/examinations' => [[['_route' => 'user_examinations', '_controller' => 'App\\Controller\\User\\UserController::userExaminations'], null, null, null, false, false, null]],
        '/user/login' => [[['_route' => 'user_login', '_controller' => 'App\\Controller\\User\\UserLoginController::login'], null, null, null, false, false, null]],
        '/user/logout' => [[['_route' => 'user_logout', '_controller' => 'App\\Controller\\User\\UserLoginController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\User\\UserRegistrationController::register'], null, null, null, false, false, null]],
        '/user/visitation' => [[['_route' => 'visitation', '_controller' => 'App\\Controller\\User\\VisitationController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/e(?'
                    .'|mployee/(?'
                        .'|admin/doctors/([^/]++)/schedule(?'
                            .'|/(?'
                                .'|create(*:229)'
                                .'|([^/]++)/day(*:249)'
                                .'|day(*:260)'
                            .')'
                            .'|(*:269)'
                        .')'
                        .'|examination/edit/([^/]++)(*:303)'
                    .')'
                    .'|xamination/register/([^/]++)(*:340)'
                .')'
                .'|/user/examination/delete/([^/]++)(*:382)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'admin_schedule_create', '_controller' => 'App\\Controller\\Admin\\AdminController::scheduleCreate'], ['id'], null, null, false, false, null]],
        249 => [[['_route' => 'admin_delete_schedule_day', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteSchedule'], ['id', 'day'], null, null, false, false, null]],
        260 => [[['_route' => 'admin_edit_schedule_day', '_controller' => 'App\\Controller\\Admin\\AdminController::editSchedule'], ['id'], null, null, false, false, null]],
        269 => [[['_route' => 'admin_schedule', '_controller' => 'App\\Controller\\Admin\\AdminController::scheduleIndex'], ['id'], null, null, false, false, null]],
        303 => [[['_route' => 'edit_examination', '_controller' => 'App\\Controller\\User\\VisitationController::editExamination'], ['id'], null, null, false, true, null]],
        340 => [[['_route' => 'register_examination', '_controller' => 'App\\Controller\\User\\VisitationController::registerExamination'], ['id'], null, null, false, true, null]],
        382 => [
            [['_route' => 'delete_examination', '_controller' => 'App\\Controller\\User\\VisitationController::deleteExamination'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

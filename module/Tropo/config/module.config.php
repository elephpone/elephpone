<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Tropo\Controller\Call' => 'Tropo\Controller\CallController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'tropo' => __DIR__ . '/../view',
        ),
    ),
    'router' => array(
        'routes' => array(
            'call' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/call[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Tropo\Controller\Call',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
);
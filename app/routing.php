<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */


$routes = [
    'Item' => [ // Controller
        ['add', '/item/add', ['GET', 'POST']], // action, url, method
        ['edit', '/item/edit/{id:\d+}', ['GET', 'POST']], // action, url, method
        ['show', '/item/{id:\d+}', 'GET'], // action, url, method
        ['delete', '/item/delete/{id:\d+}', 'GET'], // action, url, method
    ],
    'Home' => [ // Controller
        ['index', '/', ['GET','POST']], // action, url, method
    ],
    'Address' => [
        ['editAddress', '/admin/addresses', ['GET', 'POST']],
    ],
    'Picture' => [ // Controller
        ['index', '/galerie', 'GET'], // action, url, method
        ['indexAdmin', '/admin/galerie', 'GET'],
        ['add', '/admin/galerie/add', ['GET', 'POST']],
        ['delete', '/admin/galerie/delete/{id:\d+}','POST'],
    ],
    'Event' => [
        ['index', '/events', 'GET'],
        ['list', '/admin/events', 'GET'],
        ['add', '/admin/event/add', ['GET', 'POST']],
        ['updateEvent', '/admin/events/viewed/{id:\d+}', ['GET', 'POST']],
        ['remove', '/admin/event/remove', 'POST'],
    ],
    'Member' => [ // Controller
        ['add', '/inscription', ['GET', 'POST']], // action, url, method
    ],
];

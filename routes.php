
<?php

return [
    '/' => [
        'GET' => 'HomeController@index',
    ],
    '/posts' => [
        'GET' => 'PostsController@index',
        // 'POST' => 'PostsController@store'
    ],
    '/posts/create' => [
        'GET' => 'PostsController@create',
    ],
    '/author' => [
        'GET' => 'AuthorController@viewAuthor'
    ]
];


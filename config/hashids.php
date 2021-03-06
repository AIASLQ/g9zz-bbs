<?php

/*
 * This file is part of Laravel Hashids.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'salt' => env('HASH_MAIN', 'g9zzMain'),
            'length' => '10',
        ],

        'index_token' => [
            'salt' => env('LOGIN_SALT','IndexLoginWithG9zz'),
            'length' => '50'
        ],

        'console_token' => [
            'salt' => env('LOGIN_SALT','ConsoleLoginWithG9zz'),
            'length' => '50'
        ],

        'post' => [
            'salt' => env('HASH_POST', 'g9zzPost'),
            'length' => '10',
        ],

        'node' => [
            'salt' => env('HASH_NODE', 'g9zzNode'),
            'length' => '10',
        ],
        'reply' => [
            'salt' => env('HASH_REPLY', 'g9zzReply'),
            'length' => '10',
        ],
        'tag' => [
            'salt' => env('HASH_TAG', 'g9zzTag'),
            'length' => '10',
        ],
        'user' => [
            'salt' => env('HASH_USER', 'g9zzUser'),
            'length' => '10',
        ],
        'append' => [
            'salt' => env('HASH_APPEND', 'g9zzAppend'),
            'length' => '10',
        ],
        'code' => [
            'salt' => env('HASH_CODE','g9zzInviteCode'),
            'length' => 20
        ],
        'alternative' => [
            'salt' => 'your-salt-string',
            'length' => 'your-length-integer',
        ],

    ],

];

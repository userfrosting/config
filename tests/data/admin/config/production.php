<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/config
 * @license   https://github.com/userfrosting/config/blob/master/LICENSE.md (MIT License)
 */

/*
 * Test configuration file for UserFrosting.
 */
return [
    'debug' => [
        'auth' => false
    ],
    'site' => [
        'login' => [
            'enable_email' => false
        ],
        'registration' => [
            'enabled' => false,
            'captcha' => false,
        ]
    ]
];

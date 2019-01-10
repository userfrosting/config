<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/config
 * @license   https://github.com/userfrosting/config/blob/master/LICENSE.md (MIT License)
 */

/*
 * Environment configuration file.  Recursively merged in over the base default.php configuration file.
 */
return [
    'site' => [
        'analytics' => [
            'google' => [
                'enabled' => true
            ]
        ],
        'debug' => [
            'ajax' => false,
            'info' => false
        ]
    ]
];

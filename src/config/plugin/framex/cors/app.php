<?php

/**
 * @package     FrameX (FX) JWT Plugin
 * @link        https://localzet.gitbook.io
 * 
 * @author      localzet <creator@localzet.ru>
 * 
 * @copyright   Copyright (c) 2018-2020 Zorin Projects 
 * @copyright   Copyright (c) 2020-2022 NONA Team
 * 
 * @license     https://www.localzet.ru/license GNU GPLv3 License
 */

return [
        'enable' => true,
        'headers' => [
                'Access-Control-Allow-Origin' => request()->header('Origin', '*'),
                'Access-Control-Allow-Credentials' => 'true',
                'Access-Control-Allow-Methods' => '*',
                'Access-Control-Allow-Headers' => '*',
        ],
];

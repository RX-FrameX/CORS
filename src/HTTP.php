<?php

/**
 * @author    localzet<creator@localzet.ru>
 * @copyright localzet<creator@localzet.ru>
 * @link      https://www.localzet.ru/
 * @license   https://www.localzet.ru/license GNU GPLv3 License
 */

namespace FrameX\CORS;

use localzet\FrameX\MiddlewareInterface;
use localzet\FrameX\Http\Response;
use localzet\FrameX\Http\Request;

class HTTP implements MiddlewareInterface
{
    public function process(Request $request, callable $next): Response
    {
        // Preflight запросы
        $response = $request->method() == 'OPTIONS' ? response('ok', 200) : $next($request);
        // Access-Control
        $response->withHeaders(config('plugin.framex.cors.app.headers'));

        return $response;
    }
}

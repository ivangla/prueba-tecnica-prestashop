<?php

namespace ps_eventbus_v3_0_7\Http\Message\UriFactory;

use GuzzleHttp\Psr7\Utils;
use ps_eventbus_v3_0_7\Http\Message\UriFactory;
use function GuzzleHttp\Psr7\uri_for;
/**
 * Creates Guzzle URI.
 *
 * @author David de Boer <david@ddeboer.nl>
 *
 * @deprecated This will be removed in php-http/message2.0. Consider using the official Guzzle PSR-17 factory
 */
final class GuzzleUriFactory implements UriFactory
{
    /**
     * {@inheritdoc}
     */
    public function createUri($uri)
    {
        if (\class_exists(Utils::class)) {
            return Utils::uriFor($uri);
        }
        return uri_for($uri);
    }
}

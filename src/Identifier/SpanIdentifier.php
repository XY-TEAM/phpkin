<?php
namespace whitemerry\phpkin\Identifier;

/**
 * Class SpanIdentifier
 *
 * @author Piotr Bugaj <whitemerry@outlook.com>
 * @package whitemerry\phpkin\identifier
 */
class SpanIdentifier extends Identifier
{
    /**
     * Generates 128-bit hex-encoded identifier
     * http://zipkin.io/pages/instrumenting.html#trace-identifiers
     *
     * @inheritdoc
     */
    protected function generate()
    {
        return bin2hex(openssl_random_pseudo_bytes(8));
    }
}

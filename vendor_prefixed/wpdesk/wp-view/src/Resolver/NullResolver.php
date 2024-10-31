<?php

namespace OctolizeShippingNoticesVendor\WPDesk\View\Resolver;

use OctolizeShippingNoticesVendor\WPDesk\View\Renderer\Renderer;
use OctolizeShippingNoticesVendor\WPDesk\View\Resolver\Exception\CanNotResolve;
/**
 * This resolver never finds the file
 *
 * @package WPDesk\View\Resolver
 */
class NullResolver implements Resolver
{
    public function resolve($name, Renderer $renderer = null)
    {
        throw new CanNotResolve('Null Cannot resolve');
    }
}

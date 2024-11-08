<?php
/**
 * Copyright © MageWorx. All rights reserved.
 * See LICENSE.txt for license details.
 */
declare(strict_types = 1);

namespace MageWorx\InstantCheckoutCompatibility\Plugin\Block;

class PdpBlockPlugin
{
    /**
     * @param \Instant\Checkout\Block\PdpBlock $subject
     * @param callable $proceed
     * @return bool
     */
    public function aroundGetProductHasCustomOptions($subject, callable $proceed): bool
    {
        $product = $subject->getProduct();
        if (!$product) {
            return false;
        }

        $customOptions = $product->getOptions();
        return !empty($customOptions);
    }
}

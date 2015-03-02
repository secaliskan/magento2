<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\Webapi;

/**
 * Interface to locate types for custom attributes
 *
 * @package Magento\Framework\Webapi
 */
interface CustomAttributeTypeLocatorInterface
{
    /**
     * Get Data Interface type for a given custom attribute code
     *
     * @param string $attributeCode
     * @param string $serviceClass
     * @return string|null
     */
    public function getType($attributeCode, $serviceClass);
}

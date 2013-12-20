<?php

/**
 * This file is part of CMS CloudFlare by Graham Campbell.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 */

namespace GrahamCampbell\Tests\CMSCloudFlare;

use GrahamCampbell\TestBench\Traits\ServiceProviderTestCaseTrait;

/**
 * This is the service provider test class.
 *
 * @package    CMS-CloudFlare
 * @author     Graham Campbell
 * @copyright  Copyright (C) 2013  Graham Campbell
 * @license    https://github.com/GrahamCampbell/CMS-CloudFlare/blob/develop/LICENSE.md
 * @link       https://github.com/GrahamCampbell/CMS-CloudFlare
 */
abstract class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTestCaseTrait;

    /**
     * Get the service provider class.
     *
     * @return string
     */
    protected function getServiceProviderClass()
    {
        return 'GrahamCampbell\CMSCloudFlare\CMSCloudFlareServiceProvider';
    }
}

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
 *
 * @package    CMS-CloudFlare
 * @author     Graham Campbell
 * @license    GNU AFFERO GENERAL PUBLIC LICENSE
 * @copyright  Copyright (C) 2013  Graham Campbell
 * @link       https://github.com/GrahamCampbell/CMS-CloudFlare
 */

Route::get('cloudflare', array('as' => 'cloudflare.index', 'uses' => 'GrahamCampbell\CMSCloudFlare\Controllers\CloudFlareController@getIndex'));

Route::get('cloudflare/data', array('as' => 'cloudflare.data', 'uses' => 'GrahamCampbell\CMSCloudFlare\Controllers\CloudFlareController@getData'));

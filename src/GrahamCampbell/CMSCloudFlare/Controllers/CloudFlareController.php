<?php namespace GrahamCampbell\CMSCloudFlare\Controllers;

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

use GrahamCampbell\CloudFlareAPI\Facades\CloudFlareAPI;
use GrahamCampbell\CMSCore\Controllers\BaseController;

class CloudFlareController extends BaseController
{
    /**
     * Constructor (setup access permissions).
     *
     * @return void
     */
    public function __construct()
    {
        $this->setPermissions(array(
            'getIndex' => 'admin',
            'getData'  => 'admin',
        ));

        parent::__construct();
    }

    /**
     * Display the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return $this->viewMake('cms-cloudflare::index', array(), true);
    }

    /**
     * Display a data.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $this->checkAjax();

        $stats = CloudFlareAPI::api_stats();
        $data = $stats->json()['response']['result']['objs']['0']['trafficBreakdown'];
        return $this->viewMake('cms-cloudflare::data', array('data' => $data), true);
    }
}

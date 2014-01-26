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

namespace GrahamCampbell\CMSCloudFlare\Controllers;

use Illuminate\Support\Facades\View;
use GrahamCampbell\Viewer\Facades\Viewer;
use GrahamCampbell\CloudFlareAPI\Facades\CloudFlareAPI;
use GrahamCampbell\CMSCore\Controllers\AbstractController;

/**
 * This is the cloudflare controller class.
 *
 * @package    CMS-CloudFlare
 * @author     Graham Campbell
 * @copyright  Copyright (C) 2013-2014  Graham Campbell
 * @license    https://github.com/GrahamCampbell/CMS-CloudFlare/blob/master/LICENSE.md
 * @link       https://github.com/GrahamCampbell/CMS-CloudFlare
 */
class CloudFlareController extends AbstractController
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

        $this->beforeFilter('ajax', array('only' => array('getData')));

        parent::__construct();
    }

    /**
     * Display the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return Viewer::make('cms-cloudflare::index', array(), 'admin');
    }

    /**
     * Display a data.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $stats = CloudFlareAPI::apiStats();
        $data = $stats->json()['response']['result']['objs']['0']['trafficBreakdown'];
        return View::make('cms-cloudflare::data', array('data' => $data));
    }
}

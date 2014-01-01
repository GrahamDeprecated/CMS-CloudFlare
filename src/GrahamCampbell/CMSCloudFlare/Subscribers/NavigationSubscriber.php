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

namespace GrahamCampbell\CMSCloudFlare\Subscribers;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use GrahamCampbell\CMSCore\Facades\PageProvider;
use GrahamCampbell\Navigation\Facades\Navigation;

/**
 * This is the navigation subscriber class.
 *
 * @package    CMS-CloudFlare
 * @author     Graham Campbell
 * @copyright  Copyright (C) 2013-2014  Graham Campbell
 * @license    https://github.com/GrahamCampbell/CMS-CloudFlare/blob/develop/LICENSE.md
 * @link       https://github.com/GrahamCampbell/CMS-CloudFlare
 */
class NavigationSubscriber
{
    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     * @return array
     */
    public function subscribe($events)
    {
        $events->listen('navigation.main', 'GrahamCampbell\CMSCloudFlare\Subscribers\NavigationSubscriber@onNavigationMain', 6);
        $events->listen('navigation.bar', 'GrahamCampbell\CMSCloudFlare\Subscribers\NavigationSubscriber@onNavigationBar', 6);
    }

    /**
     * Handle a navigation.main event.
     *
     * @param  mixed  $event
     * @return void
     */
    public function onNavigationMain($event)
    {
        if (PageProvider::getNavUser()) {
            if (Sentry::getUser()->hasAccess('admin')) {
                // add the cloudflare link
                Navigation::addMain(array('title' => 'CloudFlare', 'slug' => 'cloudflare', 'icon' => 'cloud'), 'admin');
            }
        }
    }

    /**
     * Handle a navigation.bar event.
     *
     * @param  mixed  $event
     * @return void
     */
    public function onNavigationBar($event)
    {
        if (PageProvider::getNavUser()) {
            if (Sentry::getUser()->hasAccess('admin')) {
                // add the cloudflare link
                Navigation::addBar(array('title' => 'CloudFlare', 'slug' => 'cloudflare', 'icon' => 'cloud'));
            }
        }
    }
}

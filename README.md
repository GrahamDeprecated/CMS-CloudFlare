CMS CloudFlare
==============


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/GrahamCampbell/CMS-CloudFlare/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
[![Build Status](https://travis-ci.org/GrahamCampbell/CMS-CloudFlare.png?branch=develop)](https://travis-ci.org/GrahamCampbell/CMS-CloudFlare)
[![Coverage Status](https://coveralls.io/repos/GrahamCampbell/CMS-CloudFlare/badge.png?branch=develop)](https://coveralls.io/r/GrahamCampbell/CMS-CloudFlare)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/GrahamCampbell/CMS-CloudFlare/badges/quality-score.png?s=4ad15489ff848af2982e501526b7cce5fffb1961)](https://scrutinizer-ci.com/g/GrahamCampbell/CMS-CloudFlare)
[![Latest Version](https://poser.pugx.org/graham-campbell/cms-cloudflare/v/stable.png)](https://packagist.org/packages/graham-campbell/cms-cloudflare)
[![Still Maintained](http://stillmaintained.com/GrahamCampbell/CMS-CloudFlare.png)](http://stillmaintained.com/GrahamCampbell/CMS-CloudFlare)


## What Is CMS CloudFlare?

CMS CloudFlare is a [CMS Core](https://github.com/GrahamCampbell/CMS-Core) plugin that adds a CloudFlare admin module.  

* CMS CloudFlare was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell).  
* CMS CloudFlare relies on my [CMS Core](https://github.com/GrahamCampbell/CMS-Core) and [CloudFlare API](https://github.com/GrahamCampbell/CloudFlare-API) packages.  
* CMS CloudFlare uses [Travis CI](https://travis-ci.org/GrahamCampbell/CMS-CloudFlare) to run tests to check if it's working as it should.  
* CMS CloudFlare uses [Scrutinizer CI](https://scrutinizer-ci.com/g/GrahamCampbell/CMS-CloudFlare) and [Coveralls](https://coveralls.io/r/GrahamCampbell/CMS-CloudFlare) to run additional tests and checks.  
* CMS CloudFlare uses [Composer](https://getcomposer.org) to load and manage dependencies.  
* CMS CloudFlare provides a [change log](https://github.com/GrahamCampbell/CMS-CloudFlare/blob/develop/CHANGELOG.md), [releases](https://github.com/GrahamCampbell/CMS-CloudFlare/releases), and a [wiki](https://github.com/GrahamCampbell/CMS-CloudFlare/wiki).  
* CMS CloudFlare is licensed under the GNU AGPLv3, available [here](https://github.com/GrahamCampbell/CMS-CloudFlare/blob/develop/LICENSE.md).  


## System Requirements

* PHP 5.4.7+ or PHP 5.5+ is required.  
* You will need a [CMS Core](https://github.com/GrahamCampbell/CMS-Core) application like [Bootstrap CMS](https://github.com/GrahamCampbell/Bootstrap-CMS) because this package is designed for it.  
* You will need [Composer](https://getcomposer.org) installed to load the dependencies of CMS-CloudFlare.  


## Installation

Please check the system requirements before installing CMS CloudFlare.  

To get the latest version of CMS CloudFlare, simply require it in your `composer.json` file.  

`"graham-campbell/cms-cloudflare": "dev-master"`  

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.  


You will need to register many service providers before you attempt to load the CMS CloudFlare service provider. Open up `app/config/app.php` and add the following to the `providers` key.  

`'Lightgear\Asset\AssetServiceProvider'`  
`'Cartalyst\Sentry\SentryServiceProvider'`  
`'GrahamCampbell\Queuing\QueuingServiceProvider'`  
`'GrahamCampbell\HTMLMin\HTMLMinServiceProvider'`  
`'GrahamCampbell\Markdown\MarkdownServiceProvider'`  
`'GrahamCampbell\Security\SecurityMinServiceProvider'`  
`'GrahamCampbell\Binput\BinputServiceProvider'`  
`'GrahamCampbell\Passwd\PasswdServiceProvider'`  
`'GrahamCampbell\Credentials\CredentialsServiceProvider'`  
`'GrahamCampbell\Navigation\NavigationServiceProvider'`  
`'GrahamCampbell\CMSCore\CMSCoreServiceProvider'`  
`'GrahamCampbell\CoreAPI\CoreAPIServiceProvider'`  
`'GrahamCampbell\CloudFlareAPI\CloudFlareAPIServiceProvider'`  

Once CMS CloudFlare is installed, you need to register the service provider. Open up `app/config/app.php` and add the following to the `providers` key.  

`'GrahamCampbell\CMSCloudFlare\CMSCloudFlareServiceProvider'`  


## Usage

There is currently no usage documentation besides the [API Documentation](http://grahamcampbell.github.io/CMS-CloudFlare) for CMS CloudFlare.  


## Updating Your Fork

The latest and greatest source can be found on [GitHub](https://github.com/GrahamCampbell/CMS-CloudFlare).  
Before submitting a pull request, you should ensure that your fork is up to date.  

You may fork CMS CloudFlare:  

    git remote add upstream git://github.com/GrahamCampbell/CMS-CloudFlare.git

The first command is only necessary the first time. If you have issues merging, you will need to get a merge tool such as [P4Merge](http://perforce.com/product/components/perforce_visual_merge_and_diff_tools).  

You can then update the branch:  

    git pull --rebase upstream develop
    git push --force origin <branch_name>

Once it is set up, run `git mergetool`. Once all conflicts are fixed, run `git rebase --continue`, and `git push --force origin <branch_name>`.  


## Pull Requests

Please submit pull requests against the develop branch.  

* Any pull requests made against the master branch will be closed immediately.  
* If you plan to fix a bug, please create a branch called `fix-`, followed by an appropriate name.  
* If you plan to add a feature, please create a branch called `feature-`, followed by an appropriate name.  
* Please follow the [PSR-2 Coding Style](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and [PHP-FIG Naming Conventions](https://github.com/php-fig/fig-standards/blob/master/bylaws/002-psr-naming-conventions.md).  


## License

GNU AFFERO GENERAL PUBLIC LICENSE  

CMS CloudFlare Is A CMS Core Plugin That Adds A CloudFlare Admin Module  
Copyright (C) 2013  Graham Campbell  

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.  

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.  

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.  

<?php

/*
 * $Id: sitemap-wpmu.php 534582 2015-01-21 $
 *
 * Google Sitemaps XML Generator for WordPress MU activation
 * ==============================================================================
 *
 * If you want to use this plugin with a automatic network-wide activation, copy the "google-sitemaps-generator" directory
 * in wp-content/mu-plugins and copy this file into wp-content/mu-plugins directly:
 *
 * + wp-content/
 * | + mu-plugins/
 * | | - sitemap-wpmu.php
 * | | + google-sitemap-xml-generator/
 * | | | - sitemap.php
 * | | | - [...]
 *
 * All files in the mu-plugins directory are included for all blogs by WordPress by default, so there is no need to
 * activate this plugin anymore (and it also can not be deactivated).
 */

if(!defined('WPINC')) return;

$gsgFile = dirname(__FILE__) . "/google-sitemap-xml-generator/sitemap.php";

if(file_exists($gsgFile)) require_once($gsgFile);
else trigger_error("Google Sitemap Generator was loaded via mu-plugins directory, but the plugin was not found under $gsgFile",E_USER_WARNING);

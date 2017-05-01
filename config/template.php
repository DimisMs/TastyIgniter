<?php
/**
 * TastyIgniter
 *
 * An open source online ordering, reservation and management system for restaurants.
 *
 * @package Igniter
 * @author Samuel Adepoyigi
 * @copyright (c) 2013 - 2016. Samuel Adepoyigi
 * @copyright (c) 2016 - 2017. TastyIgniter Dev Team
 * @link https://tastyigniter.com
 * @license http://opensource.org/licenses/MIT The MIT License
 * @since File available since Release 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| Breadcrumb Config
| -------------------------------------------------------------------
| This will contain some breadcrumbs settings.
|
| $config['breadcrumb_divider']			The string used to separate each breadcrumb link
| $config['breadcrumb_tag_open'] 		The opening tag for breadcrumbs container.
| $config['breadcrumb_tag_close'] 		The closing tag for breadcrumbs container.
| $config['breadcrumb_link_open'] 		The opening tag for breadcrumb link.
| $config['breadcrumb_link_close'] 		The closing tag for breadcrumb link.
|
*/
/*
|--------------------------------------------------------------------------
| Title Separator
|--------------------------------------------------------------------------
|
| What string should be used to separate title segments sent via $this->template->title('Foo', 'Bar');
|
|   Default: ' | '
|
*/

$config['title_separator'] = ' - ';

/*
|--------------------------------------------------------------------------
| Paths to locate theme/view files
|--------------------------------------------------------------------------
|
| Which theme to use by default?
|
| Can be overriden with $this->template->set_theme('foo');
|
|   Default: [VIEWPATH, THEMEPATH]
|
*/

$config['view_folders'] = [VIEWPATH, THEMEPATH];

/*
|--------------------------------------------------------------------------
| Default template head tags
|--------------------------------------------------------------------------
|
| Which template head tag is allowed by default?
|
*/

$config['head_tags']['doctype'] = 'html5';
$config['head_tags']['favicon'] = '';
$config['head_tags']['meta'] = array();
$config['head_tags']['title'] = '';
$config['head_tags']['style'] = array();
$config['head_tags']['script'] = array();
$config['head_tags']['heading'] = '';
$config['head_tags']['buttons'] = array();
$config['head_tags']['icons'] = array();
$config['head_tags']['back_button'] = '';

/*
|--------------------------------------------------------------------------
| Theme allowed file and image extension
|--------------------------------------------------------------------------
|   @todo: move to theme manager library
| Which theme file and image extension is allowed by default?
|
*/

$config['allowed_image_ext']        = array('jpg', 'jpeg', 'png', 'gif', 'bmp', 'tiff');
$config['allowed_file_ext']         = array('html', 'txt', 'xml', 'js', 'css', 'php', 'json');

/*
|--------------------------------------------------------------------------
| Theme hidden file and folders
|--------------------------------------------------------------------------
|   @todo: move to theme manager library
| Which theme file and folders is hidden by default?
|
*/

$config['theme_hidden_files']       = array('index.html');
$config['theme_hidden_folders']     = array();

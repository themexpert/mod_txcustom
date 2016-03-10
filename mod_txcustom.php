<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';
$app  = JFactory::getApplication();

$name           	= $params->get('name', '');
$show_name      	= $params->get('show_name', 1);
$namearray      	= explode("::", $name);

$source         	= $params->get('source');
$icon           	= $params->get('icon');
$image          	= $params->get('image');
$video          	= $params->get('video');
$video_prev 		= $params->get('video_prev');

$media_position 	= $params->get('media_position');
$media_align    	= $params->get('media_align');
$media_wrap_class   = $params->get('media_class', 'media-wrapper');
$description    	= $params->get('description');
$description_class  = $params->get('description_class', 'content-wrapper');

$load_font_awosome  = $params->get('load_font_awosome', 0);
$modclass_sfx   	= htmlspecialchars($params->get('moduleclass_sfx'));

if(isset($namearray[1])){
  $name 			= $namearray[0];
  $name2 			= $namearray[1];
}

if($media_align != 'center'){
  $media_class 		= ' pull-'.$media_align;
}else{
  $media_class 		= ' text-'.$media_align;
}

if($load_font_awosome)
{
	$document = JFactory::getDocument();
	$document->addStyleSheet(JURI::root().'media/mod_txcustom/fontawesome/css/font-awesome.min.css');
}

require JModuleHelper::getLayoutPath('mod_txcustom', $params->get('layout', 'default'));

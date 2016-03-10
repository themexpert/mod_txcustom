<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_search
 *
 * @package     Joomla.Site
 * @subpackage  mod_search
 * @since       1.5
 */
class ModTxCustomHelper
{
	/**
	 * Display the search button as an image.
	 *
	 * @param   string  $button_text  The alt text for the button.
	 *
	 * @return  string  The HTML for the image.
	 *
	 * @since   1.5
	 */
	 public static function group_by_key($array)
	 {
	     $result = array();

	     foreach ($array as $key=> $sub)
	     {
	         foreach ($sub as $k => $v)
	         {
	             $result[$k][$key] = $v;
	         }
	     }
	     return $result;
	 }
}

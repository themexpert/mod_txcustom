<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<script type="text/javascript">
	function play<?php echo $module->id; ?>(){
		var wrapper = document.getElementById('vidwrap<?php echo $module->id; ?>');
		wrapper.innerHTML = '<?php echo $video; ?>';
	}
</script>
<div class="video-wrapper<?php echo $media_class . ' ' . $media_wrap_class; ?>">
  <div class="vidwrap" id="vidwrap<?php echo $module->id; ?>" onclick="play<?php echo $module->id; ?>();">
	  <img src="<?php echo $video_prev; ?>" alt="<?php echo $name; ?>">
  </div>
</div>

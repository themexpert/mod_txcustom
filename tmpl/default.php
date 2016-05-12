<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$show_link = $params->get('show_link');
$link_label = $params->get('link_label');
?>
<div class="mod-txcustom<?php //echo $modclass_sfx ?>">
  <?php if($media_position == 'top'): ?>
    <?php require JModuleHelper::getLayoutPath('mod_txcustom', basename(__FILE__, '.php') . '_' . $source); ?>
  <?php endif; ?>
  
  <div class="content-wrapper <?php echo $description_class;?>">
    <div class="content-inner">
      <?php if($show_name): ?>
      <h4>
        <?php echo $name . (isset($name2) ? ' <span>'.$name2.'</span>' : '');?>
      </h4>
      <?php endif; ?>
      
      <div class="content-desc">
        <?php echo $description;?>

        <?php if($show_link) :?>
            <a class="<?php echo $params->get('link_class');?>" href="<?php echo $params->get('link');?>" title="<?php echo $link_label;?>">
              <?php echo $link_label;?>
            </a>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <?php if($media_position == 'bottom'): ?>
    <?php require JModuleHelper::getLayoutPath('mod_txcustom', basename(__FILE__, '.php') . '_' . $source); ?>
  <?php endif; ?>

</div>

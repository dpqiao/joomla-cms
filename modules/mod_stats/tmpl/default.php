<?php
/**
 * @version		$Id$
 * @package		Joomla.Site
 * @subpackage	mod_stats
 * @copyright	Copyright (C) 2005 - 2009 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License <http://www.gnu.org/copyleft/gpl.html>
 */

// no direct access
defined('_JEXEC') or die;
?>
<?php foreach ($list as $item) : ?>
<strong><?php echo $item->title ?></strong> : <?php echo $item->data ?><br />
<?php endforeach; ?>
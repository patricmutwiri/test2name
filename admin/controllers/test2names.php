<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_test2name
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
*
 * <%= _.str.capitalize(_.slugify(componentName)) %s Controller
 *
 * @since  0.0.1
 */
class <%= _.str.capitalize(_.slugify(componentName)) %Controller<%= _.str.capitalize(_.slugify(componentName)) %s extends JControllerAdmin
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 *
	 * @since   1.6
	 */
	public function getModel($name = '<%= _.str.capitalize(_.slugify(componentName)) %', $prefix = '<%= _.str.capitalize(_.slugify(componentName)) %Model', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}

<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_test2name
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Test2name component helper.
 *
 * @param   string  $submenu  The name of the active view.
 *
 * @return  void
 *
 * @since   1.6
 */
abstract class Test2nameHelper
{
	/**
	 * Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(
			JText::_('COM_TEST2NAME_SUBMENU_MESSAGES'),
			'index.php?option=com_test2name',
			$submenu == 'messages'
		);

		JSubMenuHelper::addEntry(
			JText::_('COM_TEST2NAME_SUBMENU_CATEGORIES'),
			'index.php?option=com_categories&view=categories&extension=com_test2name',
			$submenu == 'categories'
		);

		// set some global property
		$document = JFactory::getDocument();
		$document->addStyleDeclaration('.icon-48-test2name ' .
		                               '{background-image: url(../media/com_test2name/images/tux-48x48.png);}');
		if ($submenu == 'categories') 
		{
			$document->setTitle(JText::_('COM_TEST2NAME_ADMINISTRATION_CATEGORIES'));
		}
	}

	/**
	 * Get the actions
	 */
	public static function getActions($messageId = 0)
	{	
		$result	= new JObject;

		if (empty($messageId)) {
			$assetName = 'com_test2name';
		}
		else {
			$assetName = 'com_test2name.message.'.(int) $messageId;
		}

		$actions = JAccess::getActions('com_test2name', 'component');

		foreach ($actions as $action) {
			$result->set($action->name, JFactory::getUser()->authorise($action->name, $assetName));
		}

		return $result;
	}
}

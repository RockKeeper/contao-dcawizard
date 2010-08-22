<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Winans Creative 2009, Intelligent Spark 2010, iserv.ch GmbH 2010
 * @author     Yanick Witschi <yanick.witschi@certo-net.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

$GLOBALS['TL_HOOKS']['executePostActions'][] = array('dcaWizard', 'generateAjax');
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('dcaWizard', 'loadDataContainer');
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('dcaWizard', 'outputBackendTemplate');

$GLOBALS['BE_FFL']['dcaWizard'] = 'dcaWizard';

$GLOBALS['BE_MOD']['content']['dcaWizard']['tables'] = array(Input::getInstance()->get('table'));

$GLOBALS['TL_HOOKS']['dcaWizard'] = array();

?>
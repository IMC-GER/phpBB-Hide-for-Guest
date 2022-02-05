<?php
/**
 *
 * Implements Hide for Guest in phpBB. 
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Thorsten Ahlers
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_HIDEFORGUEST_TITLE' => 'Hide for Guest',
	'ACP_HIDEFORGUEST_SETTINGS' => 'Einstellungen',
	'ACP_HIDEFORGUEST_SETTING_SAVED' => 'Hide for Guest Einstellungen erfolgreich gespeichert.'
));

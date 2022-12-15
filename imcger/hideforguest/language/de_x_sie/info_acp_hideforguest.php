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
	'ACP_HIDEFORGUEST_SETTING_SAVED' => 'Hide for Guest Einstellungen erfolgreich gespeichert.',

	'IMCGER_REQUIRE_PHPBB' => 'Diese Erweiterung benötigt eine phpBB Version gleich oder grösser %1$s und kleiner %2$s. Ihre Version ist %3$s.',
	'IMCGER_REQUIRE_PHP' => 'Diese Erweiterung benötigt eine php Version gleich oder grösser %1$s und kleiner %2$s. Ihre Version ist %3$s.',
));

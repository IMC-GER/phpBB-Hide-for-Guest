<?php
/**
 *
 * Implements Hide for Guest in phpBB. 
 * An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, Thorsten Ahlers
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
	'HIDEFORGUEST_TITLE' => 'Hide for Guest',
	'HIDEFORGUEST_TITLE_DESC' => 'Mit "Hide for Guest" selected areas are hidden for guests and bots. Areas that are hidden via the board settings "Load settings" can not be shown for guests.',
	'HIDEFORGUEST_TITLE_SET' => 'Show it for guests',

	'HIDEFORGUEST_NEWEST_USER' => 'Our newest member',
	'HIDEFORGUEST_NEWEST_USER_DESC' => 'Show the newest registered member in the statistics section.',

	'HIDEFORGUEST_STATISTICS' => 'Statistics',
	'HIDEFORGUEST_STATISTICS_DESC' => 'Show the statistics area.',

	'HIDEFORGUEST_ONLINE_LIST' => 'Who is online',
	'HIDEFORGUEST_ONLINE_LIST_DESC' => 'Display online user information on index, forum and topic pages.',
	'BOARDSETTING_ONLINE_LIST_DESC' => 'Enable online user listings is switched off in "Load settings".',
));

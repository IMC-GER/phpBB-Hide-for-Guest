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
	'HIDEFORGUEST_TITLE_DESC' => 'Mit "Hide for Guest" werden ausgewählte Bereiche für Gäste und Bots augeblendet. Bereiche die über die Boardeinstellungen "Serverlast" ausgeblendet sind können nicht für Gäste eingeblendet werden.',
	'HIDEFORGUEST_TITLE_SET' => 'Für Gäste Anzeigen',

	'HIDEFORGUEST_NEWEST_USER' => 'Unser neuestes Mitglied',
	'HIDEFORGUEST_NEWEST_USER_DESC' => 'Das neuste angemeldete Mitglied im Bereich Statistik anzeigen.',

	'HIDEFORGUEST_STATISTICS' => 'Statistik',
	'HIDEFORGUEST_STATISTICS_DESC' => 'Den Statistikbereich anzeigen.',

	'HIDEFORGUEST_ONLINE_LIST' => 'Wer ist online?',
	'HIDEFORGUEST_ONLINE_LIST_DESC' => 'Den Bereich "Wer ist online?" anzeigen.',
	'BOARDSETTING_ONLINE_LIST_DESC' => 'Online-Anzeige der Mitglieder ist in "Serverlast" ausgeschaltet.',
));

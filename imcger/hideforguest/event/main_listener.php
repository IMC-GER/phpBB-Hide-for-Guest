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

namespace imcger\hideforguest\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Hide for Guest listener
 */
class main_listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\language\language */
	protected $language;


	public function __construct
	(
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		\phpbb\user $user,
		\phpbb\language\language $language
	)
	{
		$this->config   = $config;
		$this->template = $template;
		$this->user 	= $user;
		$this->language = $language;
	}

	public  static function getSubscribedEvents()
	{
		return [
			'core.page_header_after' => 'hide_for_guest_vars',
		];
	}

	public function hide_for_guest_vars()
	{
		if (!$this->user->data['is_registered'] || $this->user->data['is_bot'])
		{
			// Werte vom Board ...
			$newest_user	= $this->user->lang('NEWEST_USER', get_username_string('full', $this->config['newest_user_id'], $this->config['newest_username'], $this->config['newest_user_colour']));
			$l_online_time	= $this->config['load_online'];

			$imcger_hideforguest_newest_user = $this->config['imcger_hideforguest_newest_user'];
			$imcger_hideforguest_online_list = $this->config['imcger_hideforguest_online_list'];
			$imcger_hideforguest_statistics	 = $this->config['imcger_hideforguest_statistics'];

			/* JS aktivieren wenn Statistik vom Board ein und Anzeige neuer User über Ext aus */
			$imcger_hideforguest_newest_user = ((bool) $newest_user && !$imcger_hideforguest_newest_user) ? 0 : 1;

			/* Wenn Statistik vom Board ein und Anzeige neuer User über Ext aus eine
			   Marke setzen die von JS erkannt wird und inclusive des Bullet entfernt wird */
			$imcger_hideforguest_statistics = $imcger_hideforguest_statistics ? 0 : ($imcger_hideforguest_newest_user ? '???' : $newest_user);

			/* "Wer ist online" für Gäste ausblenden */
			$imcger_hideforguest_online_list = $l_online_time ? !$imcger_hideforguest_online_list : 0;

			$this->template->assign_vars([
				'S_NEWEST_USER'			=> $imcger_hideforguest_newest_user,
				'NEWEST_USER'			=> $imcger_hideforguest_statistics,
				'S_DISPLAY_ONLINE_LIST'	=> $imcger_hideforguest_online_list,
			]);
		}
	}
}

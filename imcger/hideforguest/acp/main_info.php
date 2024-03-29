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

namespace imcger\hideforguest\acp;

/**
 * Hide for Guest ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\imcger\hideforguest\acp\main_module',
			'title'		=> 'ACP_HIDEFORGUEST_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_HIDEFORGUEST_SETTINGS',
					'auth'	=> 'ext_imcger/hideforguest && acl_a_board',
					'cat'	=> ['ACP_HIDEFORGUEST_TITLE'],
				],
			],
		];
	}
}

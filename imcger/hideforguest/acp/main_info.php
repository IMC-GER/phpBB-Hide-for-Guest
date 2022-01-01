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

namespace imcger\hideforguest\acp;

/**
 * Hide for Guest ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\imcger\hideforguest\acp\main_module',
			'title'		=> 'ACP_HIDEFORGUEST_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_HIDEFORGUEST_SETTINGS',
					'auth'	=> 'ext_imcger/hideforguest && acl_a_board',
					'cat'	=> array('ACP_HIDEFORGUEST_TITLE'),
				),
			),
		);
	}
}

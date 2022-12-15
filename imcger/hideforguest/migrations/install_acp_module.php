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

namespace imcger\hideforguest\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['imcger_hideforguest_newest_user']);
	}

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v32x\v324'];
	}

	public function update_data()
	{
		return [
			['config.add', ['imcger_hideforguest_newest_user', 0]],
			['config.add', ['imcger_hideforguest_statistics', 0]],
			['config.add', ['imcger_hideforguest_online_list', 0]],

			['module.add', [
					'acp',
					'ACP_CAT_DOT_MODS',
					'ACP_HIDEFORGUEST_TITLE'
				],
			],
			['module.add', [
					'acp',
					'ACP_HIDEFORGUEST_TITLE', [
							'module_basename' => '\imcger\hideforguest\acp\main_module',
							'modes'			  => ['settings'],
						],
				],
			],
		];
	}
}

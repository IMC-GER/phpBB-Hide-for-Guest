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

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('imcger_hideforguest_newest_user', 0)),
			array('config.add', array('imcger_hideforguest_statistics', 0)),
			array('config.add', array('imcger_hideforguest_online_list', 0)),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_HIDEFORGUEST_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_HIDEFORGUEST_TITLE',
				array(
					'module_basename' => '\imcger\hideforguest\acp\main_module',
					'modes'			  => array('settings'),
				),
			)),
		);
	}
}

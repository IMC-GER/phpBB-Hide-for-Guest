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
 * Hide for Guest ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('imcger/hideforguest', 'common');
		$this->tpl_name = 'acp_hideforguest_body';
		$this->page_title = $user->lang('ACP_HIDEFORGUEST_TITLE');
		add_form_key('imcger/hideforguest');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('imcger/hideforguest'))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}
			
			$config->set('imcger_hideforguest_newest_user', $request->variable('imcger_hideforguest_newest_user', 1));
			$config->set('imcger_hideforguest_statistics', $request->variable('imcger_hideforguest_statistics', 1));
			$config->set('imcger_hideforguest_online_list', $request->variable('imcger_hideforguest_online_list', 1));
			
			trigger_error($user->lang('ACP_HIDEFORGUEST_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'							=> $this->u_action,
			'S_DISPLAY_ONLINE_LIST'				=> $config['load_online'],
			'IMCGER_HIDEFORGUEST_NEWEST_USER'	=> $config['imcger_hideforguest_newest_user'],
			'IMCGER_HIDEFORGUEST_STATISTICS'	=> $config['imcger_hideforguest_statistics'],
			'IMCGER_HIDEFORGUEST_ONLINE_LIST'	=> $config['imcger_hideforguest_online_list'],
		));
	}
}

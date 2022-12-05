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

namespace imcger\hideforguest\controller;

class admin_controller
{
	/** @var config */
	protected $config;

	/** @var template */
	protected $template;

	/** @var language */
	protected $language;

	/** @var request */
	protected $request;

	/** @var string Custom form action */
	protected $u_action;

	/**
	 * Constructor
	 *
	 * @param config	$config
	 * @param template	$template
	 * @param language	$language
	 * @param request	$request
	 *
	 */
	public function __construct(
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		\phpbb\language\language $language,
		\phpbb\request\request $request
	)
	{
		$this->config	= $config;
		$this->template	= $template;
		$this->language	= $language;
		$this->request	= $request;
	}

	/**
	 * Display the options a user can configure for this extension
	 *
	 * @return null
	 * @access public
	 */
	public function display_options()
	{
		/* Add ACP lang file */
		$this->language->add_lang('common', 'imcger/hideforguest');

		add_form_key('imcger/hideforguest');

		/* Is the form being submitted to us? */
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('imcger/hideforguest'))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}

			/* Store the variable to the db */
			$this->set_variable();

			trigger_error($this->language->lang('ACP_HIDEFORGUEST_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$this->template->assign_vars([
			'U_ACTION'							=> $this->u_action,
			'S_DISPLAY_ONLINE_LIST'				=> $this->config['load_online'],
			'IMCGER_HIDEFORGUEST_NEWEST_USER'	=> $this->config['imcger_hideforguest_newest_user'],
			'IMCGER_HIDEFORGUEST_STATISTICS'	=> $this->config['imcger_hideforguest_statistics'],
			'IMCGER_HIDEFORGUEST_ONLINE_LIST'	=> $this->config['imcger_hideforguest_online_list'],
		]);
	}

	/**
	 * Store the variable to the db
	 *
	 * @return null
	 * @access protected
	 */
	protected function set_variable()
	{
		$this->config->set('imcger_hideforguest_newest_user', $this->request->variable('imcger_hideforguest_newest_user', 1));
		$this->config->set('imcger_hideforguest_statistics', $this->request->variable('imcger_hideforguest_statistics', 1));
		$this->config->set('imcger_hideforguest_online_list', $this->request->variable('imcger_hideforguest_online_list', 1));
	}

	/**
	 * Set page url
	 *
	 * @param string $u_action Custom form action
	 * @return null
	 * @access public
	 */
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}

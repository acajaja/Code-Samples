<?php

namespace Classes;

/**
 * Description of Init
 *
 * @author clif jackson
 */
class Init
{
	/**
	 * 
	 */
	const DEFAULTMENU = 'user';

	/**
	 *
	 * @var type 
	 */
	private $_menu_type;

	/**
	 * 
	 * @staticvar null $instance
	 * @return \Classes\c
	 */
	public static function getInstance()
    {
        static $instance = null;
		$c = __CLASS__;

        if (null === $instance)
		{
            $instance = new $c();
        }

        return $instance;
    }

	/**
	 * 
	 */
	public function init()
	{
		// Grab query string var
		if (filter_has_var(INPUT_GET, 'type'))
		{
			$this->_menu_type = trim(filter_input(INPUT_GET, 'type', FILTER_SANITIZE_STRING));
		}
		else
		{
			$this->_menu_type = self::DEFAULTMENU;
		}

		register_shutdown_function(array($this, '_handleFatals'));
	}

	/**
	 * 
	 * @return string
	 */
	public function getMenuType()
	{
		return $this->_menu_type;
	}

	/**
	 * 
	 * @return type
	 */
	public function _handleFatals()
	{
		$lastError = error_get_last();
		if (!empty($lastError))
		{
			var_dump($lastError);
		}
	}
}

<?php

namespace Classes;

/**
 * Description of Menus
 *
 * @author clif jackson
 */
class PageMenus
{
	/**
	 * Factory patter to create new menu.
	 *
	 * @param string $type
	 * @return \Classes\namespaceName Instance of menu
	 */
	public static function factory($type)
	{
		$className = sprintf('%sMenu', ucfirst(strtolower($type)));
		$namespaceName = sprintf('Menus\%s', $className);

		return new $namespaceName();
	}
}

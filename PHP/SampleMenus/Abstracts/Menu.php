<?php

namespace Abstracts;

use Abstracts\CommonMenuItems;
use Interfaces\MenuInterface;

/**
 * Description of Menu
 *
 * @author clif jackson
 */
abstract class Menu extends CommonMenuItems implements MenuInterface
{
	protected $_menu_items = array();

	public function render()
	{
		$items = '';

		foreach ($this->_menu_items as $label=>$link)
		{
			$items .= sprintf('<li><a href="#" title="%s">%s</a></li>', $label, $link);
		}

		$tpl = $this->_getTemplate();

		echo sprintf($tpl, $items);
	}

	protected function _getTemplate()
	{
		return file_get_contents('Templates/menu-template-1.tpl');
	}
}

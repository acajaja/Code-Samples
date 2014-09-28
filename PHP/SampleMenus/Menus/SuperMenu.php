<?php

namespace Menus;

use Abstracts\Menu;

/**
 * Description of SuperMenu
 *
 * @author clif jackson
 */
class SuperMenu extends Menu
{
	protected $_menu_items = array(
		'sensitive-A' => 'super link A',
		'sensitive-B' => 'super link B'
	);
}

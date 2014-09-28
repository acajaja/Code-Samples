<?php
/**
 * This application demostrates the Strategy, Factory, Prototype and Singleton
 * design patterns.
 *
 * @author clif jackson
 */

namespace CODESAMPLES;

date_default_timezone_set('America/New_York');

set_include_path(realpath('./'));
spl_autoload_extensions('.me.php');
spl_autoload_register();

use Classes\Init;
use Classes\PageMenus;

$i = Init::getInstance();
$i->init();

?><!DOCTYPE html>
<html>
<head>
<link href="css/styles.css" media="screen" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Menu Example</h1>

<p>Created menu type: <?php echo $i->getMenuType() ?></p>

<?php
try
{
	$m = PageMenus::factory($i->getMenuType());
	$m->render();
}
catch (Exception $e)
{
?>

<pre><?php var_dump($e) ?></pre>

<?php
}
?>

</body>
</html>

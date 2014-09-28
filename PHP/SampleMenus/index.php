<?php
/**
 * This application demostrates the Strategy, Factory, Prototype and Singleton
 * design patterns.
 *
 * @author clif jackson
 */

namespace SampleMenus;

date_default_timezone_set('America/New_York');

function _myAutoload($class_name)
{
    $path = str_replace(array('_', '\\'), '/', $class_name);
    include sprintf('%s.php', $path);
}

set_include_path(realpath('./'));
spl_autoload_register(sprintf('%s\_myAutoload', __NAMESPACE__));

use Classes\Init as I;
use Classes\PageMenus as P;

$i = I::getInstance();
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
	$m = P::factory($i->getMenuType());
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

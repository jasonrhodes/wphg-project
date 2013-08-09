<?php

# mu-plugins/autoloader.php

/**
 * Plugin Name: App Classes
 * Description: Register the autoloader for all our app classes, all of which must use the WPPlugins top level namespace
 * Author: Jason Rhodes
 */

spl_autoload_register(function ($class) {

	$segments = array_filter(explode("\\", $class));
	$first = array_shift($segments);

	if ($first === "WPPlugins") {

		$path = dirname(__DIR__) . "/classes/" . implode("/", $segments) . ".php";

	} else {

		array_unshift($segments, $first);
		$path = WP_PLUGIN_DIR . "/" . implode("/", $segments) . ".php";
		
	}

	if (file_exists($path)) {
        include $path;
    }
});

?>

---

<?php

# plugins/SomePlugin/SomeClass.php

namespace SomePlugin;

class SomeClass {
	
}

?>

--


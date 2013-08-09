<?php

add_action('plugins_loaded', function () {

    /**
     * Set up Content Types
     * 
     */
    $quotes = new WPPlugins\WPExtend\ContentType('quotes', [
        'singular_name' => "Quote",
        'supports' => ['editor', 'title', 'revisions', 'custom-fields', 'thumbnail']
    ]);

});

---

spl_autoload_register(function ($class) {

	$segments = array_filter(explode("\\", $class));
	
	$path = __DIR__ . "/" . implode("/", $segments) . ".php";

    if (file_exists($path)) {
        include $path;
    }
});

---

spl_autoload_register(function ($class) {

	$segments = array_filter(explode("\\", $class));

	if (array_shift($segments) === "WPPlugins") {
	
		$path = __DIR__ . "/" . implode("/", $segments) . ".php";

	    if (file_exists($path)) {
	        include $path;
	    }
	}
});
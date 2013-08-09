<?php

/**
 * First...
 */

jason_rhodes_some_cool_plugin_create_post_types

// For now we'll just echo a message
echo "<br><br>We ran a cool plugin...<br><br>";

/**
 * Namespaces
 */
namespace Rhodes\SomeCoolPlugin;

function create_post_types() {
    // For now we'll just echo a message
    echo "We ran a cool plugin";
}
add_action('init', 'Rhodes\\SomeCoolPlugin\\create_post_types');


/**
 * lambda stored in variable
 */
$create_post_types = function () {
    // For now we'll just echo a message
    echo "We ran a cool LAMBDA plugin";
};

add_action('init', $create_post_types);

/**
 * lambda inline
 */
add_action('init', function () {
    // For now we'll just echo a message
    echo "We ran a cool ANONYMOUS FUNCTION plugin";
});


/**
 * 5.4
 */

namespace Rhodes\SomeCoolPlugin;

trait CreatePosts {



}

class RandomClass extends \Other\RandomClass {

    public function __construct($options) {
        $this->content_type_message = $this->create_content_type($options);
    }

    public function create_content_type($options) {
        // For now we'll just return a fake success message
        return "You just created a new content type called " . $options["type"];
    }

    public function print_message() {
        echo $this->content_type_message;
    }

}

$object = new \Rhodes\SomeCoolPlugin\RandomClass([ "type" => "Location" ]);

add_action('init', array($object, "print_message"));


/**
 * Closure ??
 */
$make_adder = function ($a) {
    return function ($b) use ($a) {
        return $a + $b;
    };
};

$add_3 = $make_adder(3);

add_action('wp_footer', function () use ($add_3) {
    echo "We ran a cool plugin to add 3 to any number " . $add_3(2);
});


<?php

require ( __DIR__ . '/../vendor/autoload.php' );

$f3 = \Base::instance();
$f3->route('GET /',
    function() {
        echo '<html><body><br/><br/><center><p style=\"font-size:55px\">Hello, world!</p></center></body></html>';
    }
);
$f3->run();

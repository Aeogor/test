<?php

function shutdown() {
    if (!is_null(error_get_last())) {
        http_response_code(200);
    }
}
register_shutdown_function('shutdown');

header("HTTP/1.1 200 OK");
error_reporting(0);
ini_set('display_errors', 'off');
echo "Hello";
?>

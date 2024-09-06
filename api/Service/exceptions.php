<?php

function exit_with_message($message = "Internal Server Error", $code = 500) {
    http_response_code($code);
    echo json_encode(['error' => $message]);
    exit();
}

function exit_with_content($content = null, $code = 200) {
    http_response_code($code);
    echo json_encode($content);
    exit();
}
?>

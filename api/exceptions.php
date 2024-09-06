<?php
// file : api/exceptions.php
class HTTPException extends Exception {

public function __construct($message = "An error occured.", $code = 500) {
    parent::__construct($message, $code);
}
}

class NotFoundException extends HTTPException {
public function __construct($message = "Not Found", $code = 404) {
    parent::__construct($message, $code);
}
}

class BadRequestException extends HTTPException {
public function __construct($message = "Bad Request", $code = 400) {
    parent::__construct($message, $code);
}
}
?>
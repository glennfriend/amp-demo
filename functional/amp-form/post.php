<?php

    require_once '../bootstrap.php';

    jsonHeaderOutput();

    echo json_encode([
        'error'         => false,
        'error_message' => 'Success !',
        'post'          => $_POST,
        'get'           => $_GET
    ], JSON_PRETTY_PRINT);

?>
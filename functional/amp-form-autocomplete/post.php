<?php

    require_once '../bootstrap.php';

    jsonHeaderOutput();

    echo json_encode([
        'post'  => $_POST,
        'get'   => $_GET
    ], JSON_PRETTY_PRINT);

?>
<?php

    require_once '../bootstrap.php';

    ampRedirect('https://google.com.tw');

    echo json_encode([
        'type' => 'redirect url',
        'message' => 'It will be displayed shortly if with redirect'
        , JSON_PRETTY_PRINT
    ]);
?>
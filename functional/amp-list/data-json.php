<?php

    require_once '../bootstrap.php';

    jsonHeaderOutput();

    function getLikeAmount()
    {
        return rand(10, 99);
    }

?>{
    "items":[
        {
            "isLike": false,
            "likeAmount": <?php echo getLikeAmount(); ?>
        }
    ]
}
<?php

foreach (glob('functional/*', GLOB_ONLYDIR) as $folder) {
    echo '<a href="' . $folder . '/#development=1" target="_blank">' . basename($folder) .'</a>';
    echo '<br>';
}

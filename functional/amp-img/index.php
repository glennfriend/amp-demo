<?php

require_once '../bootstrap.php';
init();

?><!doctype html>
<html amp>
    <head>
        <meta charset="utf-8">
        <title>AMP page</title>
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <link rel="canonical" href="/index.html">

        <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom=""><?php echo getCssContent(); ?></style>

        <script async="" src="https://cdn.ampproject.org/v0.js"></script>
        <script async="" custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
        <script async="" custom-element="amp-form"      src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    </head>
    <body>

        <amp-img src="not_found.png" layout="responsive" title="the image"
                 width="300" height="200">
            <div fallback>
                <amp-img src="/dist/example/amp.png" layout="responsive" alt="offline"
                         width="300" height="200"></amp-img>
            </div>
        </amp-img>

    </body>
</html>

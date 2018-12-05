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

        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>

    </head>
    <body>

        <main id="content" role="main" class="">
            <article class="recipe-article">
                <header>
                    <span class="ampstart-subtitle block px3 pt2 mb2"></span>
                    <h1 class="mb1 px3">Title</h1>
                </header>
                <p class="mb4 px3">

                    <amp-iframe width="600" height="450"
                                sandbox="allow-scripts allow-same-origin"
                                layout="responsive"
                                frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDG9YXIhKBhqclZizcSzJ0ROiE0qgVfwzI&q=iceland">
                        <amp-img layout="fill" src="../amp.png" placeholder></amp-img>
                    </amp-iframe>
                    <br>

                    <amp-iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14460.142629625758!2d121.55392261977539!3d25.03286395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abd3702839e1%3A0x1ec4809041d20108!2z5aSn5a6J56uZ!5e0!3m2!1szh-TW!2stw!4v1543990970977"
                                width="600" height="450"
                                sandbox="allow-scripts allow-same-origin allow-popups"
                                layout="responsive"
                                frameborder="0" style="border:0"
                                allowfullscreen>
                        <amp-img layout="fill" src="../amp.png" placeholder></amp-img>
                    </amp-iframe>
                    <br>

                </p>
            </article>
        </main>

    </body>
</html>
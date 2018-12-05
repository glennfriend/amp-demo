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

        <main id="content" role="main" class="">
            <article class="recipe-article">
                <header>
                    <span class="ampstart-subtitle block px3 pt2 mb2"></span>
                    <h1 class="mb1 px3">Title</h1>
                </header>
                <p class="mb4 px3">

                    <form name="form-post" method="post" action-xhr="<?php echo url("post.php"); ?>" target="_top">
                        <fieldset>
                            <label>
                                <span>Name:</span>
                                <input type="text" name="name" value="bob" required>
                            </label>
                            <br>
                            <label>
                                <span>Email:</span>
                                <input type="email" name="email" value="bob.happy@hotmail.com" required>
                            </label>
                            <br>
                            <input type="submit" value="action-nhr post">
                        </fieldset>
                        <div submit-success>
                            <template type="amp-mustache">
                                <p>[submit-success]</p>
                                <p>Thanks  <b>{{post.name}}</b> </p>
                                <p>Message is: <b>{{success_message}}</b></p>
                            </template>
                        </div>
                        <div submit-error>
                            <template type="amp-mustache">
                                <p>[submit-error]</p>
                            </template>
                        </div>
                    </form>

                </p>
                <p class="mb4 px3">

                    <form name="form-post" method="post" action-xhr="<?php echo url("post-redirect.php"); ?>" target="_top">
                        <fieldset>
                            <label>
                                <span>Name:</span>
                                <input type="text" name="name" value="charlie" required>
                            </label>
                            <br>
                            <input type="submit" value="action-nhr post & redirect (for background)">
                        </fieldset>
                    </form>

                </p>
                <p class="mb4 px3">

                    <form name="form-get" method="get" action="<?php echo url("post.php"); ?>" target="_top">
                        <fieldset>
                            <label>
                                <span>Name:</span>
                                <input type="text" name="name" value="david" required>
                            </label>
                            <br>
                            <input type="submit" value="action get">
                        </fieldset>
                    </form>

                </p>
            </article>
        </main>

    </body>
</html>

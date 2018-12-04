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
    <script async="" custom-element="amp-list"      src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
    <script async="" custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "hello world"
      }
    </script>

  </head>
  <body>

    <main id="content" role="main" class="">
      <article class="recipe-article">
        <header>
          <span class="ampstart-subtitle block px3 pt2 mb2"></span>
          <h1 class="mb1 px3">Title</h1>
        </header>
        <p class="mb4 px3">

          <amp-list
            class="like-placeholder"
            width="auto"
            height="45"
            layout="fixed-height"
            credentials="include"
            src="<?php echo url("data-json.php"); ?>">
            <template type="amp-mustache">
              <p class="like {{#isLike}} like--on {{/isLike}}">
                like amount: {{likeAmount}}
              </p>
            </template>
          </amp-list>

        </p>
        </article>
    </main>

  </body>
</html>
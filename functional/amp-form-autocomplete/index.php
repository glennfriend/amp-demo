<?php

require_once '../bootstrap.php';
init();

$endpoint =  url('autocomplete-list.php?term=');
$post =  url('post.php');

?><!doctype html>
<html amp>
    <head>
        <meta charset="utf-8">
        <title>AMP page</title>
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <link rel="canonical" href="/index.html">

        <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom="">
            <?php echo getCssContent(); ?>
            /* custom */
            .to_focus:focus {
                display: block;
            }
        </style>

        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
        <script async custom-element="amp-form"      src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
        <script async custom-element="amp-selector"  src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
        <script async custom-element="amp-list"      src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
        <script async custom-element="amp-bind"      src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    </head>
    <body>

        <amp-state id="serachData">
            <script type="application/json">
            {
                "endpoint": "<?=$endpoint?>",
                "initialData": [{
                    "query": "",
                    "results":[]
                }]
            }
            </script>
        </amp-state>
        <div on="tap:AMP.setState({showDropdown:false})"
             role="button"
             tabindex="0">
        </div>

        <ul>
            <li>這裡的樣本是 "man"</li>
            <li>至少要輸入三個字元</li>
            <li>輸入什麼, 結果都一樣</li>
            <li>輸入完後, 鍵入 Tab 可以選擇列表內容</li>
            <li>缺少: auto focus to amp-form input</li>
        </ul>

        <form method="get" action="<?=$post?>"
              target="_blank">
            <fieldset>
                <div>
                    <input type="text"
                           name="keyword"
                           value=""
                           [value]="query || ''"
                           autocomplete="off"
                           required
                           on="
                                input-debounced:
                                  AMP.setState({
                                    query: event.value,
                                    showDropdown: event.value && event.value.length >= 3
                                  }),
                                  amp-searchList.show;
                                tap:
                                  AMP.setState({
                                    query: query == null ? '' : query,
                                    showDropdown: 'true'
                                  }),
                                  amp-searchList.show">
                    <input type="submit">

                    <div>
                        <div [class]="(showDropdown && query) ? '' : ' hidden'">
                            <amp-list layout="fixed-height"
                                      height="300"
                                      items="."
                                      [src]="query && query.length >= 3 ?
                                              serachData.endpoint + query :
                                              serachData.initialData"
                                      id="amp-searchList">
                                <template type="amp-mustache">
                                    <amp-selector keyboard-select-mode="focus"
                                                  layout="container"
                                                  on="
                                                      select:
                                                        AMP.setState({
                                                          query: event.targetOption,
                                                          showDropdown: false
                                                        }),
                                                        amp-searchList.hide">
                                        <div role="option"
                                             tabindex="0"
                                             on="tap:amp-searchList.hide"
                                             option="{{ value }}"
                                        >{{ label }}</div>
                                    </amp-selector>
                                </template>
                            </amp-list>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>

    </body>
</html>
